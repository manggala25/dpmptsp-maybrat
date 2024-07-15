<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Fungsi;
use App\Models\TugasDinas;
use App\Models\Layanan;
use App\Models\News;
use App\Models\MenuHome;
use App\Models\Perizinan;
use App\Models\JamLayanan;

class PerizinanpageController extends Controller
{
    public function index(Request $request)
    {
        $contact = Contact::all();
        $tugas_dinas = TugasDinas::where('status', 'aktif')->get();
        $fungsi = Fungsi::where('status', 'aktif')->get();
        $layanan = Layanan::where('status', 'aktif')->get();
        $menuhome = MenuHome::findOrFail(1);
        $jamlayanan = JamLayanan::all();

        // Ambil data artikel
        $news = News::where('status', 'published')
            ->orderBy('tanggal_publikasi', 'desc')
            ->paginate(10); 

        // Pencarian
        $namaIzin = $request->query('nama');
        $perizinan = Perizinan::where('status', 'aktif')
            ->when($namaIzin, function ($query, $namaIzin) {
                return $query->where('nama_izin', 'like', '%' . $namaIzin . '%');
            })
            ->get();

        return view('frontend.perizinan', compact('contact', 'tugas_dinas', 'fungsi', 'layanan', 'news', 'menuhome', 'perizinan', 'jamlayanan'));
    }
}

class DetailperizinanpageController extends Controller
{
    public function show($slug)
    {
        $perizinan = Perizinan::where('slug', $slug)->firstOrFail(); // Ambil data perizinan berdasarkan slug
        return view('frontend.detail-perizinan', compact('perizinan'));
    }
}
