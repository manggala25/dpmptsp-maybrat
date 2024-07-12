<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\News;
use App\Models\MenuHome;
use App\Models\MenuArtikel;
use App\Models\JamLayanan;
use Illuminate\Database\Eloquent\ModelNotFoundException; // Import exception

class DetailartikelpageController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        $jamlayanan = JamLayanan::all();

        // Ambil data artikel
        $news = News::where('status', 'published')
            ->orderBy('tanggal_publikasi', 'desc')
            ->paginate(10); // Gunakan paginate untuk pagination

        $menuhome = MenuHome::findOrFail(1);

        // Ambil satu data dari MenuArtikel
        $menuartikel = MenuArtikel::first();

        return view('frontend.artikel', compact('contact', 'news', 'menuhome', 'menuartikel', 'jamlayanan'));
    }

    public function show($slug)
    {
        try {
            // Ambil artikel berdasarkan slug
            $article = News::where('slug', $slug)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            // Handle jika artikel tidak ditemukan
            abort(404); // atau redirect ke halaman lain
        }

        // Ambil data kontak dan menu
        $contact = Contact::all();
        $menuhome = MenuHome::findOrFail(1);
        $menuartikel = MenuArtikel::first();
        $jamlayanan = JamLayanan::all();

        return view('frontend.detail-artikel', compact('article', 'contact', 'menuhome', 'menuartikel', 'jamlayanan'));
    }
}
