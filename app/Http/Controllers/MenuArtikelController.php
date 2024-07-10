<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\MenuArtikel;

class MenuArtikelController extends Controller
{
    public function index()
    {
        $menuartikel = MenuArtikel::all();
        return view('menuartikel.index', compact('menuartikel'));
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
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        // Proses upload gambar
        $data = $request->all();
        foreach (['bg_hero'] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $path = $file->store('public/images');
                $data[$field] = str_replace('public/', '', $path);
            }
        }

        MenuArtikel::create($data);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect()->route('menuartikel.index');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'edit_bg_hero' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'edit_title_hero' => 'required|string|max:255',
        ]);

        $menuartikel = MenuArtikel::findOrFail($id);

        $menuartikel->title_hero = $request->edit_title_hero;

        // Mengelola upload gambar jika ada
        foreach (['bg_hero'] as $field) {
            if ($request->hasFile('edit_' . $field)) {
                // Hapus gambar lama jika ada
                if ($menuartikel->$field && Storage::disk('public')->exists($menuartikel->$field)) {
                    Storage::disk('public')->delete($menuartikel->$field);
                }

                // Simpan gambar baru
                $path = $request->file('edit_' . $field)->store('public/images');
                $menuartikel->$field = str_replace('public/', '', $path);
            }
        }

        // Simpan perubahan
        $menuartikel->save();

        Alert::success('Success', 'Data berhasil diperbarui');
        return redirect()->route('menuartikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuartikel = MenuArtikel::findOrFail($id);

        foreach (['bg_hero'] as $field) {
            if ($menuartikel->$field && Storage::disk('public')->exists($menuartikel->$field)) {
                Storage::disk('public')->delete($menuartikel->$field);
            }
        }

        $menuartikel->delete();

        Alert::success('Success', 'Data berhasil dihapus');
        return redirect()->route('menuartikel.index');
    }
}
