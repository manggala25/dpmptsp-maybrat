<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    public function index()
    {
        $dokumen = Dokumen::all();
        return view('dokumen.index', compact('dokumen'));
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama_dokumen' => 'required|string|max:255',
            'file_dokumen' => 'required|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:20480', // Maksimal 20MB
            'status' => 'required|in:aktif,nonaktif',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $data = $request->all();
        if ($request->hasFile('file_dokumen')) {
            $file = $request->file('file_dokumen');
            $path = $file->store('public/documents');
            $data['file_dokumen'] = str_replace('public/', '', $path);
        }

        $data['slug'] = Str::slug($data['nama_dokumen'], '-');
        Dokumen::create($data);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect()->route('dokumen.index');
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'edit_nama_dokumen' => 'required|string|max:255',
            'edit_status' => 'required|in:aktif,nonaktif',
            'edit_file_dokumen' => 'nullable|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:20480',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $dokumen = Dokumen::find($id);
        if (!$dokumen) {
            Alert::error('Error', 'Dokumen not found');
            return redirect()->back();
        }

        $data = $request->all();
        if ($request->hasFile('edit_file_dokumen')) {
            // Hapus file dokumen lama dari storage jika ada
            if (Storage::exists('public/documents/' . $dokumen->file_dokumen)) {
                Storage::delete('public/documents/' . $dokumen->file_dokumen);
            }
            $file = $request->file('edit_file_dokumen');
            $path = $file->store('public/documents');
            $data['file_dokumen'] = str_replace('public/', '', $path);
        } else {
            $data['file_dokumen'] = $dokumen->file_dokumen;
        }

        $data['slug'] = Str::slug($data['edit_nama_dokumen'], '-');
        $dokumen->update([
            'nama_dokumen' => $data['edit_nama_dokumen'],
            'file_dokumen' => $data['file_dokumen'],
            'slug' => $data['slug'],
            'status' => $data['edit_status'],
        ]);

        Alert::success('Success', 'Dokumen berhasil diupdate');
        return redirect()->route('dokumen.index');
    }


    public function destroy($id)
    {
        $dokumen = dokumen::findOrFail($id);

        // Hapus file dokumen dari storage
        if (Storage::exists('documents/' . $dokumen->file_dokumen)) {
            Storage::delete('documents/' . $dokumen->file_dokumen);
        }

        $dokumen->delete();
        
        Alert::success('Success', 'dokumen berhasil dihapus');
        return redirect()->route('dokumen.index')->with('success', 'dokumen berhasil dihapus');
    }
}
