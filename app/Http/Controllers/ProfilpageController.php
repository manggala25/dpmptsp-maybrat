<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Fungsi;
use App\Models\TugasDinas;
use App\Models\Layanan;
use App\Models\Testimoni;
use App\Models\Partners;
use App\Models\ProfileDinas;
use App\Models\Publikasi;
use App\Models\MenuHome;
use App\Models\MenuProfil;
use App\Models\ProgramKerja;
use App\Models\JamLayanan;

class ProfilpageController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        $tugas_dinas = TugasDinas::where('status', 'aktif')->get();
        $fungsi = Fungsi::where('status', 'aktif')->get();
        $layanan = Layanan::where('status', 'aktif')->get();
        $testimoni = Testimoni::where('status', 'aktif')->get();
        $partners = Partners::where('status', 'aktif')->get();
        $program_kerja = ProgramKerja::where('status', 'aktif')->get();
        $profile_dinas = ProfileDinas::findOrFail(1);
        $publikasi = Publikasi::where('status', 'aktif')->get();
        $menuprofil = MenuProfil::findOrFail(1);
        $kontak = Contact::select('nama_informasi', 'link', 'detail', 'status')
            ->where('status', 'aktif')
            ->orderByRaw("CASE WHEN nama_informasi = 'Alamat Kantor' THEN 0 ELSE 1 END, nama_informasi")
            ->get();
        $menuhome = MenuHome::findOrFail(1);
        $jamlayanan = JamLayanan::all();
        $jam_layanan = JamLayanan::all();
        // dd($jam_layanan);

        return view('frontend.profil', compact('contact', 'tugas_dinas', 'fungsi', 'layanan', 'testimoni', 'partners', 'kontak', 'profile_dinas', 'publikasi', 'menuhome', 'program_kerja', 'menuprofil', 'jamlayanan', 'jam_layanan'));
    }
}
