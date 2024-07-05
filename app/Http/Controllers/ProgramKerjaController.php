<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramKerja;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class ProgramKerjaController extends Controller
{
    public function index()
    {
        $program_kerja = ProgramKerja::all();
        return view('program_kerja.index', compact('program_kerja'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'nama_program' => 'required',
            'status' => 'required|in:aktif,nonaktif',
        ], [
            'nama_program.required' => 'Nama Program tidak boleh kosong',
            'status.in' => 'Status harus aktif atau nonaktif',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $store = ProgramKerja::create([
            'nama_program' => $request->nama_program,
            'status' => $request->status
        ]);

        if ($store) {
            Alert::success('Success', 'Data berhasil disimpan');
            return redirect()->route('program_kerja.index');
        } else {
            Alert::error('Error', 'Data gagal disimpan');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_program' => 'required|string',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        $program_kerja = ProgramKerja::findOrFail($id);

        $program_kerja->nama_program = $request->nama_program;
        $program_kerja->status = $request->status;

        $program_kerja->save();

        return redirect()->back()->with('success', 'Program kerja berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $program_kerja = ProgramKerja::findOrFail($id);

        $program_kerja->delete();

        return redirect()->route('program_kerja.index')->with('success', 'Program kerja berhasil dihapus');
    }
}
