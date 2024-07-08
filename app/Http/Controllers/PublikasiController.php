<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class PublikasiController extends Controller
{
  public function index()
  {
    $publikasi = Publikasi::all();
    return view('publikasi.index', compact('publikasi'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // dd($request->all());
    $validate = Validator::make($request->all(), [
      'nama_publikasi' => 'required',
      'deskripsi' => 'required',
      'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'status' => 'required|in:aktif,nonaktif',
    ], [
      'nama_publikasi.required' => 'Nama Publikasi tidak boleh kosong',
      'deskripsi.required' => 'Deskripsi tidak boleh kosong',
      'gambar.required' => 'Gambar tidak boleh kosong',
      'gambar.image' => 'File harus berupa gambar',
      'gambar.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg',
      'gambar.max' => 'Ukuran gambar maksimal 2MB',
      'status.required' => 'Status tidak boleh kosong',
      'status.in' => 'Status harus antara "aktif" atau "nonaktif"',
    ]);

    if ($request->hasFile('gambar')) {
      $validate = Validator::make($request->all(), [
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ], [
        'gambar.required' => 'Gambar tidak boleh kosong',
        'gambar.image' => 'File harus berupa gambar',
        'gambar.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg',
        'gambar.max' => 'Ukuran gambar maksimal 2MB',
      ]);
    }

    if ($validate->fails()) {
      Alert::error('Error', $validate->errors()->first());
      return redirect()->back()->withErrors($validate)->withInput();
    }

    $imagePath = $request->file('gambar')->store('public/publikasi');
    $imagePath = str_replace('public/', '', $imagePath);

    $status = $request->input('status');

    $store = Publikasi::create([
      'nama_publikasi' => $request->nama_publikasi,
      'deskripsi' => $request->deskripsi,
      'gambar' => $imagePath,
      'status' => $status,
    ]);

    if ($store) {
      Alert::success('Success', 'Data berhasil disimpan');
      return redirect()->route('publikasi.index');
    } else {
      Alert::error('Error', 'Data gagal disimpan');
      return redirect()->back();
    }
  }

  public function update(Request $request, $id)
  {
    // Validasi data yang diterima dari formulir
    $request->validate([
      'edit_nama_publikasi' => 'required|string',
      'edit_status' => 'required|in:aktif,nonaktif',
      'edit_deskripsi' => 'required|string',
      'edit_gambar' => 'image|max:2048',
    ]);

    // Cari data publikasi berdasarkan $id
    $publikasi = Publikasi::findOrFail($id);

    // Update data publikasi
    $publikasi->nama_publikasi = $request->edit_nama_publikasi;
    $publikasi->status = $request->edit_status;
    $publikasi->deskripsi = $request->edit_deskripsi;

    // Mengelola upload gambar jika ada
    if ($request->hasFile('edit_gambar')) {
      // Hapus gambar lama jika ada
      if ($publikasi->gambar && file_exists(storage_path('app/public/' . $publikasi->gambar))) {
        unlink(storage_path('app/public/' . $publikasi->gambar));
      }

      // Simpan gambar baru
      $gambarPath = $request->file('edit_gambar')->store('publikasi', 'public');
      $publikasi->gambar = $gambarPath;
    }

    // Simpan perubahan
    $publikasi->save();

    if ($publikasi) {
      Alert::success('Success', 'Data berhasil disimpan');
      return redirect()->route('publikasi.index');
    } else {
      Alert::error('Error', 'Data gagal disimpan');
      return redirect()->back();
    }
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $publikasi = Publikasi::findOrFail($id);

    if ($publikasi->gambar) {
      Storage::disk('public')->delete($publikasi->gambar);
    }

    $publikasi->delete();

    return redirect()->back()->with('success', 'Data publikasi berhasil dihapus.');
  }
}
