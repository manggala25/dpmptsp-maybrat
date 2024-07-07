<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fungsi;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class FungsiController extends Controller
{
    public function index()
    {
        $fungsi = Fungsi::all();
        return view('fungsi.index', compact('fungsi'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'deskripsi' => 'required',
            'status' => 'required|in:aktif,nonaktif',
        ], [
            'deskripsi.required' => 'Deskripsi tidak boleh kosong',
            'status.in' => 'Status harus aktif atau nonaktif',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $store = Fungsi::create([
            'deskripsi' => $request->deskripsi,
            'status' => $request->status
        ]);

        if ($store) {
            Alert::success('Success', 'Data berhasil disimpan');
            return redirect()->route('fungsi.index');
        } else {
            Alert::error('Error', 'Data gagal disimpan');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $fungsi = Fungsi::findOrFail($id);

        $fungsi->deskripsi = $request->deskripsi;
        $fungsi->status = $request->status;

        $fungsi->save();

        return redirect()->back()->with('success', 'Fungsi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $fungsi = Fungsi::findOrFail($id);

        $fungsi->delete();

        return redirect()->route('fungsi.index')->with('success', 'Fungsi berhasil dihapus');
    }
}
