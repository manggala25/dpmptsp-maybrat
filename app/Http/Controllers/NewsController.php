<?php
// app/Http/Controllers/NewsController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data input
        $validate = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'isi' => 'required',
            'gambar_berita' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'penulis' => 'required|max:255',
            'kategori' => 'required|max:255',
            'tanggal_publikasi' => 'required|date',
            'status' => 'required|in:draft,published,archived',
        ], [
            'judul.required' => 'Judul berita tidak boleh kosong.',
            'gambar_berita.required' => 'Gambar berita tidak boleh kosong.',
            'gambar_berita.image' => 'File harus berupa gambar.',
            'gambar_berita.mimes' => 'Format gambar yang diterima: jpeg, png, jpg, gif, svg.',
            'gambar_berita.max' => 'Ukuran gambar maksimal 2MB.',
            'penulis.required' => 'Penulis berita tidak boleh kosong.',
            'kategori.required' => 'Kategori berita tidak boleh kosong.',
            'tanggal_publikasi.required' => 'Tanggal publikasi berita tidak boleh kosong.',
            'status.in' => 'Status berita tidak boleh kosong.',
        ]);

        if ($validate->fails()) {
            Alert::error('Error', $validate->errors()->first());
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $imagePath = $request->file('gambar_berita')->store('public/news');
        $imagePath = str_replace('public/', '', $imagePath);

        $store = News::create([
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'gambar_berita' => $imagePath,
            'penulis' => $request->input('penulis'),
            'kategori' => $request->input('kategori'),
            'tanggal_publikasi' => $request->input('tanggal_publikasi'),
            'status' => $request->input('status'),
        ]);

        if ($store) {
            Alert::success('Success', 'Berita berhasil ditambahkan');
            return redirect()->route('news.index');
        } else {
            Alert::error('Error', 'Berita gagal ditambahkan');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'edit_judul' => 'required|string',
            'edit_isi' => 'required|string',
            'edit_gambar_berita' => 'image|max:2048', // Contoh validasi untuk gambar, maksimal 2MB
            'edit_penulis' => 'required|string',
            'edit_kategori' => 'required|string',
            'edit_tanggal_publikasi' => 'required|date_format:Y-m-d\TH:i',
            'edit_status' => 'required|in:draft,published,archived',
        ]);

        // Cari data berita berdasarkan $id
        $news = News::findOrFail($id);

        // Update data berita
        $news->judul = $request->edit_judul;
        $news->isi = $request->edit_isi;
        $news->penulis = $request->edit_penulis;
        $news->kategori = $request->edit_kategori;
        $news->tanggal_publikasi = $request->edit_tanggal_publikasi;
        $news->status = $request->edit_status;

        // Mengelola upload gambar jika ada
        if ($request->hasFile('edit_gambar_berita')) {
            // Hapus gambar lama jika ada
            if ($news->gambar_berita && file_exists(storage_path('app/public/' . $news->gambar_berita))) {
                unlink(storage_path('app/public/' . $news->gambar_berita));
            }

            // Simpan gambar baru
            $gambarPath = $request->file('edit_gambar_berita')->store('news', 'public');
            $news->gambar_berita = $gambarPath;
        }

        // Simpan perubahan
        $news->save();

        // Redirect atau kembalikan response sesuai kebutuhan aplikasi
        return redirect()->back()->with('success', 'Data berita berhasil diperbarui.');
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();

        return view('frontend.detail-artikel', ['news' => $news]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);

        if ($news->gambar_berita) {
            Storage::disk('public')->delete($news->gambar_berita);
        }

        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus');
    }
}
