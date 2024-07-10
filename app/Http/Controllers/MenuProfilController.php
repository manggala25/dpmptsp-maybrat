<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\MenuProfil;

class MenuProfilController extends Controller
{
    public function index()
    {
        $menuprofil = MenuProfil::all();
        return view('menuprofil.index', compact('menuprofil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $validate = Validator::make($request->all(), [
            'bg_hero' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'title_hero' => 'required|string|max:255', 
            'img_visi' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'title_visi' => 'required|string|max:255', 
            'title_misi' => 'required|string|max:255', 
            'title_moto' => 'required|string|max:255', 
            'title_tugas' => 'required|string|max:255', 
            'title_fungsi' => 'required|string|max:255', 
            'title_program' => 'required|string|max:255', 
            'title_publikasi' => 'required|string|max:255',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        // Proses upload gambar
        $data = $request->all();
        foreach (['bg_hero', 'img_visi'] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $path = $file->store('public/images');
                $data[$field] = str_replace('public/', '', $path);
            }
        }

        MenuProfil::create($data);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect()->route('menuprofil.index');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'edit_bg_hero' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'edit_img_visi' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'edit_title_hero' => 'required|string|max:255',
            'edit_title_visi' => 'required|string|max:255',
            'edit_title_misi' => 'required|string|max:255',
            'edit_title_moto' => 'required|string|max:255',
            'edit_title_tugas' => 'required|string|max:255',
            'edit_title_fungsi' => 'required|string|max:255',
            'edit_title_program' => 'required|string|max:255',
            'edit_title_publikasi' => 'required|string|max:255',
        ]);

        $menuprofil = MenuProfil::findOrFail($id);

        $menuprofil->title_hero = $request->edit_title_hero;
        $menuprofil->title_visi = $request->edit_title_visi;
        $menuprofil->title_misi = $request->edit_title_misi;
        $menuprofil->title_moto = $request->edit_title_moto;
        $menuprofil->title_tugas = $request->edit_title_tugas;
        $menuprofil->title_fungsi = $request->edit_title_fungsi;
        $menuprofil->title_program = $request->edit_title_program;
        $menuprofil->title_publikasi = $request->edit_title_publikasi;

        // Mengelola upload gambar jika ada
        foreach (['bg_hero', 'img_visi'] as $field) {
            if ($request->hasFile('edit_' . $field)) {
                // Hapus gambar lama jika ada
                if ($menuprofil->$field && Storage::disk('public')->exists($menuprofil->$field)) {
                    Storage::disk('public')->delete($menuprofil->$field);
                }

                // Simpan gambar baru
                $path = $request->file('edit_' . $field)->store('public/images');
                $menuprofil->$field = str_replace('public/', '', $path);
            }
        }

        // Simpan perubahan
        $menuprofil->save();

        Alert::success('Success', 'Data berhasil diperbarui');
        return redirect()->route('menuprofil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuprofil = MenuProfil::findOrFail($id);

        foreach (['bg_hero', 'img_visi'] as $field) {
            if ($menuprofil->$field && Storage::disk('public')->exists($menuprofil->$field)) {
                Storage::disk('public')->delete($menuprofil->$field);
            }
        }

        $menuprofil->delete();

        Alert::success('Success', 'Data berhasil dihapus');
        return redirect()->route('menuprofil.index');
    }
}
