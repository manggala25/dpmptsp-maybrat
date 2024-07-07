<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasDinas;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class TugasDinasController extends Controller
{
    public function index()
    {
        $tugas_dinas = TugasDinas::all();
        return view('tugas_dinas.index', compact('tugas_dinas'));
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

        $store = TugasDinas::create([
            'deskripsi' => $request->deskripsi,
            'status' => $request->status
        ]);

        if ($store) {
            Alert::success('Success', 'Data berhasil disimpan');
            return redirect()->route('tugas_dinas.index');
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

        $tugas_dinas = TugasDinas::findOrFail($id);

        $tugas_dinas->deskripsi = $request->deskripsi;
        $tugas_dinas->status = $request->status;

        $tugas_dinas->save();

        return redirect()->back()->with('success', 'Fungsi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $Tugas_dinas = TugasDinas::findOrFail($id);

        $Tugas_dinas->delete();

        return redirect()->route('tugas_dinas.index')->with('success', 'Fungsi berhasil dihapus');
    }
}
