<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\ProfileDinas;

class ProfileDinasController extends Controller
{
  public function index()
  {
    $profile_dinas = ProfileDinas::all();
    return view('profile_dinas.index', compact('profile_dinas'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function update(Request $request, $id)
  {
    // Validasi data yang diterima dari formulir
    $request->validate([
      'edit_nama_dinas' => 'required|string',
      'edit_deskripsi' => 'required|string',
      'edit_dasarhukum' => 'required|string',
      'edit_visi' => 'required|string',
      'edit_misi' => 'required|string',
      'edit_tujuan' => 'required|string',
      'edit_motto' => 'required|string',
      'edit_gambar_strukturorganisasi' => 'image|max:2048', // Contoh validasi untuk gambar, maksimal 2MB
      'edit_logo_dinas' => 'image|max:2048', // Contoh validasi untuk gambar, maksimal 2MB
    ]);

    // Cari data profile_dinas berdasarkan $id
    $profile_dinas = ProfileDinas::findOrFail($id);

    // Update data profile_dinas
    $profile_dinas->nama_dinas = $request->edit_nama_dinas;
    $profile_dinas->deskripsi = $request->edit_deskripsi;
    $profile_dinas->dasarhukum = $request->edit_dasarhukum;
    $profile_dinas->visi = $request->edit_visi;
    $profile_dinas->misi = $request->edit_misi;
    $profile_dinas->tujuan = $request->edit_tujuan;
    $profile_dinas->motto = $request->edit_motto;

    // Mengelola upload gambar struktur organisasi jika ada
    if ($request->hasFile('edit_gambar_strukturorganisasi')) {
      // Hapus gambar lama jika ada
      if ($profile_dinas->gambar_strukturorganisasi && file_exists(storage_path('app/public/' . $profile_dinas->gambar_strukturorganisasi))) {
        unlink(storage_path('app/public/' . $profile_dinas->gambar_strukturorganisasi));
      }

      // Simpan gambar baru
      $gambarStrukturOrganisasiPath = $request->file('edit_gambar_strukturorganisasi')->store('profile_dinas', 'public');
      $profile_dinas->gambar_strukturorganisasi = $gambarStrukturOrganisasiPath;
    }

    // Mengelola upload logo dinas jika ada
    if ($request->hasFile('edit_logo_dinas')) {
      // Hapus logo lama jika ada
      if ($profile_dinas->logo_dinas && file_exists(storage_path('app/public/' . $profile_dinas->logo_dinas))) {
        unlink(storage_path('app/public/' . $profile_dinas->logo_dinas));
      }

      // Simpan logo baru
      $logoDinasPath = $request->file('edit_logo_dinas')->store('profile_dinas', 'public');
      $profile_dinas->logo_dinas = $logoDinasPath;
    }

    // Simpan perubahan
    $profile_dinas->save();

    // Redirect atau kembalikan response sesuai kebutuhan aplikasi
    return redirect()->back()->with('success', 'Data profile dinas berhasil diperbarui.');
  }


}
