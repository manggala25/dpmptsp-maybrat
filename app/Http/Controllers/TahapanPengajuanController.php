<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahapanPengajuan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TahapanPengajuanController extends Controller
{
    public function index()
    {
        $tahapan_pengajuan = TahapanPengajuan::all();
        return view('tahapanpengajuan.index' , compact('tahapan_pengajuan'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'nama_tahapan' => 'required',
            'deskripsi' => 'required',
            'urutan' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'nama_tahapan.required' => 'Nama contact tidak boleh kosong',
            'deskripsi.required' => 'deskripsi Informasi tidak boleh kosong',
            'urutan.required' => 'Urutan tahapan tidak boleh kosong',
            'icon.required' => 'Gambar tidak boleh kosong',
            'icon.image' => 'File harus berupa gambar',
            'icon.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg',
            'icon.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        if ($request->hasFile('icon')) {
            $validate = Validator::make($request->all(), [
                'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'icon.required' => 'Gambar tidak boleh kosong',
                'icon.image' => 'File harus berupa gambar',
                'icon.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg',
                'icon.max' => 'Ukuran gambar maksimal 2MB',
            ]);
        }

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $imagePath = $request->file('icon')->store('public/tahapanpengajuan');
        $imagePath = str_replace('public/', '', $imagePath);

        $status = $request->input('status');

        $store = TahapanPengajuan::create([
            'nama_tahapan' => $request->nama_tahapan,
            'deskripsi' => $request->deskripsi,
            'urutan' => $request->urutan,
            'icon' => $imagePath,
            'status' => $status,
        ]);

        if ($store) {
            Alert::success('Success', 'Data berhasil disimpan');
            return redirect()->route('tahapanpengajuan.index');
        } else {
            Alert::error('Error', 'Data gagal disimpan');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'edit_nama_tahapan' => 'required|string',
            'edit_deskripsi' => 'required|string',
            'edit_urutan' => 'required|numeric',
            'edit_icon' => 'image|max:2048',
        ]);

        $tahapan_pengajuan = TahapanPengajuan::findOrFail($id);

        $tahapan_pengajuan->nama_tahapan = $request->edit_nama_tahapan;
        $tahapan_pengajuan->deskripsi = $request->edit_deskripsi;
        $tahapan_pengajuan->urutan = $request->edit_urutan;

        if ($request->hasFile('edit_icon')) {

            if ($tahapan_pengajuan->icon && file_exists(storage_path('app/public/' . $tahapan_pengajuan->icon))) {
                unlink(storage_path('app/public/' . $tahapan_pengajuan->icon));
            }

            $gambarPath = $request->file('edit_icon')->store('tahapanpengajuan', 'public');
            $tahapan_pengajuan->icon = $gambarPath;
        }

        $tahapan_pengajuan->save();
        Alert::success('Success', 'Data Tahapan Pengajuan berhasil diperbarui.');
        return redirect()->route('tahapanpengajuan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tahapan_pengajuan = TahapanPengajuan::findOrFail($id);

        if ($tahapan_pengajuan->icon) {
            Storage::disk('public')->delete($tahapan_pengajuan->icon);
        }

        $tahapan_pengajuan->delete();

        Alert::success('Success', 'Tahapan Pengajuan berhasil dihapus');

        return redirect()->route('tahapanpengajuan.index')->with('success', 'Tahapan Pengajuan berhasil dihapus');
    }
}
