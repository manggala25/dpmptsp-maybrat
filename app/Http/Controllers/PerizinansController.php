<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perizinan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



class PerizinansController extends Controller
{
    public function index()
    {
        $perizinan = Perizinan::all();
        return view('perizinans.index', compact('perizinan'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validate = Validator::make($request->all(), [
            'nama_izin' => 'required|string|max:255',
            'bidang_izin' => 'required|string|max:255',
            'masa_berlaku' => 'required|string|max:255',
            'lama_proses' => 'required|string|max:255',
            'status' => 'required|in:aktif,nonaktif',
        ], [
            'required' => ':attribute tidak boleh kosong',
            'in' => ':attribute harus aktif atau nonaktif',
        ]);

        // Jika validasi gagal, kembalikan ke halaman sebelumnya dengan error
        if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
        }

        try {
            // Simpan data perizinan ke database
            $perizinan = new Perizinan();
            $perizinan->nama_izin = $request->nama_izin;
            $perizinan->bidang_izin = $request->bidang_izin;
            $perizinan->masa_berlaku = $request->masa_berlaku;
            $perizinan->lama_proses = $request->lama_proses;

            // Generate slug dari nama izin jika slug kosong
            $perizinan->slug = $request->slug ?? Str::slug($request->nama_izin);

            $perizinan->status = $request->status;
            $perizinan->save();

            // Tampilkan alert success menggunakan SweetAlert
            Alert::success('Success', 'Data perizinan berhasil disimpan');
            return redirect()->route('perizinans.index');
        } catch (\Exception $e) {
            // Tangkap error jika ada masalah dalam penyimpanan data
            Alert::error('Error', 'Data perizinan gagal disimpan, Cek Apakah Nama Izin Sudah Ada');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'nama_izin' => 'required|string|max:255',
            'bidang_izin' => 'required|string|max:255',
            'masa_berlaku' => 'required|string|max:50',
            'lama_proses' => 'required|string|max:50',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        // Ambil data perizinan berdasarkan $id
        $perizinan = Perizinan::findOrFail($id);

        try {
            // Simpan data perizinan ke database
            $perizinan->nama_izin = $request->nama_izin;
            $perizinan->bidang_izin = $request->bidang_izin;
            $perizinan->masa_berlaku = $request->masa_berlaku;
            $perizinan->lama_proses = $request->lama_proses;
            $perizinan->status = $request->status;
            $perizinan->slug = Str::slug($request->nama_izin);
            $perizinan->save();

            // Tampilkan alert success menggunakan SweetAlert
            Alert::success('Success', 'Data perizinan berhasil diperbarui');
            return redirect()->route('perizinans.index');
        } catch (\Exception $e) {
            // Tangkap error jika ada masalah dalam penyimpanan data
            Alert::error('Error', 'Data perizinan gagal diperbarui, Cek Apakah Nama Izin Sudah Ada');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        $perizinan = Perizinan::findOrFail($id);

        $perizinan->delete();

        Alert::success('Success', 'Perizinan berhasil dihapus.');
        return redirect()->route('perizinans.index');
    }
}