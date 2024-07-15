<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Partners;
use App\Models\Layanan;
use App\Models\Portal;
use App\Models\Publikasi;
use App\Models\Perizinan;
use App\Models\Dokumen;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $jumlahBerita = News::where('status', 'published')->count();
        $jumlahPartner = Partners::where('status', 'aktif')->count();
        $jumlahLayanan = Layanan::where('status', 'aktif')->count();
        $jumlahPortal = Portal::where('status', 'aktif')->count();
        $aktifPublikasi = Publikasi::where('status', 'aktif')->get();
        $perizinans = Perizinan::all();
        $dokumen = Dokumen::all();

        return view('dashboard', compact('jumlahBerita', 'jumlahPartner', 'jumlahLayanan', 'jumlahPortal', 'aktifPublikasi', 'perizinans', 'dokumen'));
    }
}
