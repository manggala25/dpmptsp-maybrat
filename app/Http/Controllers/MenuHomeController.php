<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\MenuHome;

class MenuHomeController extends Controller
{
    public function index()
    {
        $menuhome = MenuHome::all();
        return view('menuhome.index', compact('menuhome'));
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
            'logo_dark' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo_white' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bg_hero' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_hero' => 'required|string|max:255',
            'paragraf_hero' => 'required|string',
            'img_profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_profil' => 'required|string|max:255',
            'title_fungsi' => 'required|string|max:255',
            'title_tugas' => 'required|string|max:255',
            'title_layanan' => 'required|string|max:255',
            'paragraf_layanan' => 'required|string',
            'title_portal' => 'required|string|max:255',
            'paragraf_portal' => 'required|string',
            'title_berita' => 'required|string|max:255',
            'paragraf_berita' => 'required|string',
            'title_ucapan' => 'required|string|max:255',
            'paragraf_ucapan' => 'required|string',
            'title_instansi' => 'required|string|max:255',
            'paragraf_instansi' => 'required|string',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        // Proses upload gambar
        $data = $request->all();
        foreach (['logo_dark', 'logo_white', 'bg_hero', 'img_profil'] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $path = $file->store('public/images');
                $data[$field] = str_replace('public/', '', $path);
            }
        }

        MenuHome::create($data);

        Alert::success('Success', 'Data berhasil disimpan');
        return redirect()->route('menuhome.index');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'edit_logo_dark' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'edit_logo_white' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'edit_bg_hero' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'edit_title_hero' => 'required|string|max:255',
            'edit_paragraf_hero' => 'required|string',
            'edit_img_profil' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'edit_title_profil' => 'required|string|max:255',
            'edit_title_fungsi' => 'required|string|max:255',
            'edit_title_tugas' => 'required|string|max:255',
            'edit_title_layanan' => 'required|string|max:255',
            'edit_paragraf_layanan' => 'required|string',
            'edit_title_portal' => 'required|string|max:255',
            'edit_paragraf_portal' => 'required|string',
            'edit_title_berita' => 'required|string|max:255',
            'edit_paragraf_berita' => 'required|string',
            'edit_title_ucapan' => 'required|string|max:255',
            'edit_paragraf_ucapan' => 'required|string',
            'edit_title_instansi' => 'required|string|max:255',
            'edit_paragraf_instansi' => 'required|string',
        ]);

        $menuhome = MenuHome::findOrFail($id);

        $menuhome->title_hero = $request->edit_title_hero;
        $menuhome->paragraf_hero = $request->edit_paragraf_hero;
        $menuhome->title_profil = $request->edit_title_profil;
        $menuhome->title_fungsi = $request->edit_title_fungsi;
        $menuhome->title_tugas = $request->edit_title_tugas;
        $menuhome->title_layanan = $request->edit_title_layanan;
        $menuhome->paragraf_layanan = $request->edit_paragraf_layanan;
        $menuhome->title_portal = $request->edit_title_portal;
        $menuhome->paragraf_portal = $request->edit_paragraf_portal;
        $menuhome->title_berita = $request->edit_title_berita;
        $menuhome->paragraf_berita = $request->edit_paragraf_berita;
        $menuhome->title_ucapan = $request->edit_title_ucapan;
        $menuhome->paragraf_ucapan = $request->edit_paragraf_ucapan;
        $menuhome->title_instansi = $request->edit_title_instansi;
        $menuhome->paragraf_instansi = $request->edit_paragraf_instansi;

        // Mengelola upload gambar jika ada
        foreach (['logo_dark', 'logo_white', 'bg_hero', 'img_profil'] as $field) {
            if ($request->hasFile('edit_' . $field)) {
                // Hapus gambar lama jika ada
                if ($menuhome->$field && Storage::disk('public')->exists($menuhome->$field)) {
                    Storage::disk('public')->delete($menuhome->$field);
                }

                // Simpan gambar baru
                $path = $request->file('edit_' . $field)->store('public/images');
                $menuhome->$field = str_replace('public/', '', $path);
            }
        }

        // Simpan perubahan
        $menuhome->save();

        Alert::success('Success', 'Data berhasil diperbarui');
        return redirect()->route('menuhome.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menuhome = MenuHome::findOrFail($id);

        foreach (['logo_dark', 'logo_white', 'bg_hero', 'img_profil'] as $field) {
            if ($menuhome->$field && Storage::disk('public')->exists($menuhome->$field)) {
                Storage::disk('public')->delete($menuhome->$field);
            }
        }

        $menuhome->delete();

        Alert::success('Success', 'Data berhasil dihapus');
        return redirect()->route('menuhome.index');
    }
}
