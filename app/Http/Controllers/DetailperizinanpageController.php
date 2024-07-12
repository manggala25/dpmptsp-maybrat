<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\MenuHome;
use App\Models\Perizinan;
use App\Models\Persyaratan;
use App\Models\KategoriPersyaratan;
use App\Models\JamLayanan;
use App\Models\TahapanPengajuan;
use Illuminate\Support\Facades\DB;

class DetailperizinanpageController extends Controller
{
    public function show($slug)
    {
        $contact = Contact::all();
        $whatsappContact = $contact->firstWhere('nama_informasi', 'Whatsapp');
        $menuhome = MenuHome::findOrFail(1);
        $jamlayanan = JamLayanan::all();
        $perizinan = Perizinan::where('slug', $slug)->firstOrFail();
        $tahapan_pengajuan = TahapanPengajuan::orderBy('urutan')->get();

        // Ambil data persyaratan berdasarkan kategori yang sesuai dengan nama perizinan
        $kategoriBaru = Persyaratan::where('perizinan_id', $perizinan->id)
            ->whereHas('kategori', function ($query) {
                $query->where('kategori', 'Baru');
            })
            ->get();

        $kategoriPerpanjang = Persyaratan::where('perizinan_id', $perizinan->id)
            ->whereHas('kategori', function ($query) {
                $query->where('kategori', 'Perpanjang');
            })
            ->get();

        $kategoriBalikNama = Persyaratan::where('perizinan_id', $perizinan->id)
            ->whereHas('kategori', function ($query) {
                $query->where('kategori', 'Balik Nama/ Perubahan');
            })
            ->get();

        return view('frontend.detail-perizinan', compact('contact', 'menuhome', 'whatsappContact', 'perizinan', 'kategoriBaru', 'kategoriPerpanjang', 'kategoriBalikNama', 'jamlayanan', 'tahapan_pengajuan'));
    }

}
