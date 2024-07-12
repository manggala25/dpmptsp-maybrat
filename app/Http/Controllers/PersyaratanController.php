<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persyaratan;
use App\Models\Perizinan;
use App\Models\KategoriPersyaratan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PersyaratanController extends Controller
{
    public function index()
    {
        $persyaratan = Persyaratan::all();
        $perizinan = Perizinan::all();
        $kategoriPersyaratan = KategoriPersyaratan::all();

        return view('persyaratan.index', compact('persyaratan', 'perizinan', 'kategoriPersyaratan')); // Sesuaikan nama variabel
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'perizinan_id' => 'required|exists:perizinan,id',
            'kategori_persyaratan_id' => 'required|exists:kategori_persyaratan,id',
            'persyaratan' => 'required|string',
            'keterangan' => 'nullable|string',
            'template_file' => 'nullable|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:20480', // Maksimal 20MB
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $data = $request->all();
        if ($request->hasFile('template_file')) {
            $file = $request->file('template_file');
            $path = $file->store('public/documents');
            $data['template_file'] = str_replace('public/', '', $path);
        }

        Persyaratan::create($data);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect()->route('persyaratan.index');
    }


    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'persyaratan' => 'required',
            'keterangan' => 'nullable|string',
            'template_file' => 'nullable|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:20480', // Maksimal 20MB
        ]);

        try {
            $persyaratan = Persyaratan::findOrFail($id);
            $oldFile = $persyaratan->template_file; // Simpan nama file lama

            $persyaratan->persyaratan = $request->persyaratan;
            $persyaratan->keterangan = $request->keterangan;

            // Hapus file lama jika ada perubahan file baru
            if ($request->hasFile('template_file')) {
                if ($oldFile && Storage::disk('public')->exists('documents/' . $oldFile)) {
                    Storage::disk('public')->delete('documents/' . $oldFile);
                }
                $path = $request->file('template_file')->store('public/documents');
                $persyaratan->template_file = str_replace('public/', '', $path);
            }

            $persyaratan->save();

            // Tampilkan alert success menggunakan SweetAlert
            Alert::success('Success', 'Data persyaratan berhasil diupdate.');
            return redirect()->route('persyaratan.index')->with('success', 'Data persyaratan berhasil diupdate.');
        } catch (\Exception $e) {
            // Tampilkan alert error menggunakan SweetAlert
            Alert::error('Error', 'Terjadi kesalahan saat mengupdate data persyaratan.');
            return back()->with('error', 'Terjadi kesalahan saat mengupdate data persyaratan.');
        }
    }


    public function destroy($id)
    {
        $persyaratan = Persyaratan::findOrFail($id);
        if ($persyaratan->template_file) {
            Storage::disk('public')->delete('documents/' . $persyaratan->template_file);
        }
        $persyaratan->delete();

        Alert::success('Success', 'Data persyaratan berhasil dihapus');
        return redirect()->route('persyaratan.index');
    }
}
