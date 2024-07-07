<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return view('layanan.index', compact('layanan'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama_layanan' => 'required',
            'icon' => 'required|string',
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,nonaktif',
        ], [
            'nama_layanan.required' => 'Nama Layanan tidak boleh kosong',
            'icon.required' => 'Icon tidak boleh kosong',
            'icon.string' => 'Icon harus berupa teks',
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'status.in' => 'Status harus aktif atau nonaktif',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $store = Layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'icon' => $request->icon,
            'slug' => Str::slug($request->nama_layanan),
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ]);

        if ($store) {
            Alert::success('Success', 'Data berhasil disimpan');
            return redirect()->route('layanan.index');
        } else {
            Alert::error('Error', 'Data gagal disimpan');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_layanan' => 'required',
            'icon' => 'required|string',
            'deskripsi' => 'required|string',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $layanan = Layanan::findOrFail($id);

        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->icon = $request->icon;
        $layanan->slug = Str::slug($request->nama_layanan);
        $layanan->deskripsi = $request->deskripsi;
        $layanan->status = $request->status;

        $layanan->save();

        return redirect()->back()->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);

        $layanan->delete();

        return redirect()->route('layanan.index')->with('success', 'Layanan berhasil dihapus');
    }
}
