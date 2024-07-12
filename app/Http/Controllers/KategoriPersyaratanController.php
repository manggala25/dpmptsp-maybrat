<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriPersyaratan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class KategoriPersyaratanController extends Controller
{
    public function index()
    {
        $kategoripersyaratan = KategoriPersyaratan::all();
        return view('kategoripersyaratan.index' , compact('kategoripersyaratan'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validate = Validator::make($request->all(), [
            'kategori' => 'required|string|max:255',
        ], [
            'required' => ':attribute tidak boleh kosong',
        ]);

        // Jika validasi gagal, kembalikan ke halaman sebelumnya dengan error
        if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
        }

        try {
            // Simpan Kategori ke database
            $kategoripersyaratan = new KategoriPersyaratan();
            $kategoripersyaratan->kategori = $request->kategori;

            $kategoripersyaratan->save();

            // Tampilkan alert success menggunakan SweetAlert
            Alert::success('Success', 'Kategori berhasil disimpan');
            return redirect()->route('kategoripersyaratan.index');
        } catch (\Exception $e) {
            // Tangkap error jika ada masalah dalam penyimpanan data
            Alert::error('Error', 'Kategori gagal disimpan');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        // Ambil Kategori berdasarkan $id
        $kategoripersyaratan = KategoriPersyaratan::findOrFail($id);

        // Update Kategori
        $kategoripersyaratan->kategori = $request->kategori;


        $kategoripersyaratan->save();

        // Redirect kembali dengan pesan sukses
        Alert::success('Success', 'Kategori berhasil diperbarui.');
        return redirect()->route('kategoripersyaratan.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kategoripersyaratan = KategoriPersyaratan::findOrFail($id);

        $kategoripersyaratan->delete();

        Alert::success('Success', 'Kategori berhasil dihapus.');
        return redirect()->route('kategoripersyaratan.index');
    }
}
