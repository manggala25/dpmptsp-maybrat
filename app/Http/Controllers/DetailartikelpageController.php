<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Fungsi;
use App\Models\TugasDinas;
use App\Models\Layanan;
use App\Models\News;

class DetailartikelpageController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        $tugas_dinas = TugasDinas::where('status', 'aktif')->get();
        $fungsi = Fungsi::where('status', 'aktif')->get();
        $layanan = Layanan::where('status', 'aktif')->get();

        return view('frontend.detail_artikel', compact('contact', 'tugas_dinas', 'fungsi', 'layanan'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $contact = Contact::all(); 

        return view('frontend.detail-artikel', compact('news', 'contact'));
    }
}
