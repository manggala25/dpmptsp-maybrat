<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Fungsi;
use App\Models\TugasDinas;
use App\Models\Layanan;

class KontakpageController extends Controller
{
    public function index()
    {
        $contact = Contact::select('nama_informasi', 'link', 'icon', 'detail', 'status')
            ->where('status', 'aktif')
            ->orderByRaw("CASE WHEN nama_informasi = 'Alamat Kantor' THEN 1 ELSE 0 END, nama_informasi")
            ->get();
        $gmaps_embed = $contact->firstWhere('nama_informasi', 'Gmaps Embed');
        $tugas_dinas = TugasDinas::where('status', 'aktif')->get();
        $fungsi = Fungsi::where('status', 'aktif')->get();
        $layanan = Layanan::where('status', 'aktif')->get();

        return view('frontend.kontak', compact('contact', 'tugas_dinas', 'fungsi', 'layanan', 'gmaps_embed'));
    }
}
