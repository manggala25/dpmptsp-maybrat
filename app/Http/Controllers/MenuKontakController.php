<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\MenuKontak;

class MenuKontakController extends Controller
{
    public function index()
    {
        $menukontak = MenuKontak::all();
        return view('menukontak.index', compact('menukontak'));
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

        MenuKontak::create($data);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect()->route('menukontak.index');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'edit_bg_hero' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'edit_title_hero' => 'required|string|max:255',
        ]);

        $menukontak = MenuKontak::findOrFail($id);

        $menukontak->title_hero = $request->edit_title_hero;

        // Mengelola upload gambar jika ada
        foreach (['bg_hero'] as $field) {
            if ($request->hasFile('edit_' . $field)) {
                // Hapus gambar lama jika ada
                if ($menukontak->$field && Storage::disk('public')->exists($menukontak->$field)) {
                    Storage::disk('public')->delete($menukontak->$field);
                }

                // Simpan gambar baru
                $path = $request->file('edit_' . $field)->store('public/images');
                $menukontak->$field = str_replace('public/', '', $path);
            }
        }

        // Simpan perubahan
        $menukontak->save();

        Alert::success('Success', 'Data berhasil diperbarui');
        return redirect()->route('menukontak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menukontak = MenuKontak::findOrFail($id);

        foreach (['bg_hero'] as $field) {
            if ($menukontak->$field && Storage::disk('public')->exists($menukontak->$field)) {
                Storage::disk('public')->delete($menukontak->$field);
            }
        }

        $menukontak->delete();

        Alert::success('Success', 'Data berhasil dihapus');
        return redirect()->route('menukontak.index');
    }
}
