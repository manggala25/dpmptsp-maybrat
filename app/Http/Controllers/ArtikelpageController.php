<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Fungsi;
use App\Models\TugasDinas;
use App\Models\Layanan;
use App\Models\News; // Import model News
use App\Models\MenuHome;
use App\Models\MenuArtikel;

class ArtikelpageController extends Controller
{
    public function index()
    {
        $contact = Contact::all();

        // Ambil data artikel
        $news = News::where('status', 'published')
            ->orderBy('tanggal_publikasi', 'desc')
            ->paginate(10); // Gunakan paginate untuk pagination

        $menuhome = MenuHome::findOrFail(1);

        // Ambil satu data dari MenuArtikel
        $menuartikel = MenuArtikel::first();

        return view('frontend.artikel', compact('contact', 'news', 'menuhome', 'menuartikel'));
    }

    public function show($slug)
    {
        $article = News::where('slug', $slug)->firstOrFail();
        return view('frontend.detail-artikel', compact('article'));
    }
}
