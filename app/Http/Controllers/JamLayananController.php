<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JamLayanan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class JamLayananController extends Controller
{
    // Menampilkan semua data jam layanan
    public function index()
    {
        $jam_layanan = JamLayanan::all();
        return view('jam_layanan.index', compact('jam_layanan'));
    }

    // Menyimpan data jam layanan baru
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'nama_hari' => 'required|string',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_selesai' => 'required|date_format:H:i',
            'status' => 'required|in:buka,libur',
        ]);

        // Buat dan simpan data baru ke dalam database
        JamLayanan::create([
            'nama_hari' => $request->nama_hari,
            'jam_buka' => $request->waktu_mulai,
            'jam_tutup' => $request->waktu_selesai,
            'status' => $request->status,
        ]);

        Alert::success('Success', 'Data waktu layanan berhasil ditambahkan.');
        // Redirect atau response setelah data berhasil disimpan
        return redirect()->route('jam_layanan.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_hari' => 'required|string',
            'jam_buka' => 'required|date_format:H:i',
            'jam_tutup' => 'required|date_format:H:i',
            'status' => 'required|in:buka,libur',
        ]);

        $jam_layanan = JamLayanan::findOrFail($id);

        $jam_layanan->nama_hari = $request->nama_hari;
        $jam_layanan->jam_buka = $request->jam_buka;
        $jam_layanan->jam_tutup = $request->jam_tutup;
        $jam_layanan->status = $request->status;

        $jam_layanan->save();

        Alert::success('Success', 'Data jam layanan berhasil diperbarui.');
        return redirect()->back()->with('success', 'Jam layanan berhasil diperbarui.');
    }


    // Menghapus data jam layanan
    public function destroy($id)
    {
        $jam_layanan = JamLayanan::findOrFail($id);
        $jam_layanan->delete();

        Alert::success('Success', 'Jam layanan berhasil dihapus.');

        // Redirect atau response setelah data berhasil dihapus
        return redirect()->route('jam_layanan.index');
    }
}
