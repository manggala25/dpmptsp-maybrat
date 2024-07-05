<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index', compact('testimoni'));
    }

    public function create()
    {
        return view('testimoni.create');
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required',
            'jabatan' => 'required',
            'ucapan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:aktif,nonaktif',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/testimoni');
            $fotoPath = str_replace('public/', '', $fotoPath);
        }

        $testimoni = Testimoni::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'ucapan' => $request->ucapan,
            'foto' => $fotoPath,
            'status' => $request->status,
        ]);

        if ($testimoni) {
            Alert::success('Success', 'Testimoni berhasil disimpan');
            return redirect()->route('testimoni.index');
        } else {
            Alert::error('Error', 'Testimoni gagal disimpan');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'edit_nama' => 'required|string',
            'edit_jabatan' => 'required|string',
            'edit_ucapan' => 'required|string',
            'edit_status' => 'required|in:aktif,nonaktif',
            'edit_foto' => 'image|max:2048',
        ]);

        $testimoni = Testimoni::findOrFail($id);

        $testimoni->nama = $request->edit_nama;
        $testimoni->jabatan = $request->edit_jabatan;
        $testimoni->ucapan = $request->edit_ucapan;
        $testimoni->status = $request->edit_status;

        if ($request->hasFile('edit_foto')) {
            if ($testimoni->foto && file_exists(storage_path('app/public/' . $testimoni->foto))) {
                unlink(storage_path('app/public/' . $testimoni->foto));
            }

            $fotoPath = $request->file('edit_foto')->store('testimoni', 'public');
            $testimoni->foto = $fotoPath;
        }

        $testimoni->save();
        return redirect()->back()->with('success', 'Data testimoni berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);

        if ($testimoni->foto) {
            Storage::disk('public')->delete($testimoni->foto);
        }

        $testimoni->delete();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus');
    }
}
