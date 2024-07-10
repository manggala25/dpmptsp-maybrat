<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Fungsi;
use App\Models\TugasDinas;
use App\Models\Layanan;
use App\Models\News;

class PerizinanpageController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        $tugas_dinas = TugasDinas::where('status', 'aktif')->get();
        $fungsi = Fungsi::where('status', 'aktif')->get();
        $layanan = Layanan::where('status', 'aktif')->get();

        // Ambil data artikel
        $news = News::where('status', 'published')
            ->orderBy('tanggal_publikasi', 'desc')
            ->paginate(10); // Gunakan paginate untuk pagination

        return view('frontend.perizinan', compact('contact', 'tugas_dinas', 'fungsi', 'layanan', 'news'));
    }
}

class DetailperizinanpageController extends Controller
{
    public function show()
    {
        return view('frontend.detail-perizinan');
    }
}
