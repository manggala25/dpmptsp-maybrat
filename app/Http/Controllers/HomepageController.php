<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Fungsi;
use App\Models\TugasDinas;
use App\Models\Layanan;
use App\Models\Portal;
use App\Models\ProfileDinas;
use App\Models\Testimoni;
use App\Models\Partners;

class HomepageController extends Controller
{
    public function index()
    {
        try {
            $contact = Contact::all();
            $tugas_dinas = TugasDinas::where('status', 'aktif')->get();
            $fungsi = Fungsi::where('status', 'aktif')->get();
            $layanan = Layanan::where('status', 'aktif')->get();
            $portal = Portal::where('status', 'aktif')->get();
            $testimoni = Testimoni::where('status', 'aktif')->get();
            $partners = Partners::where('status', 'aktif')->get();

            $profile_dinas = ProfileDinas::findOrFail(1);
            $short_description = $this->limitDescription($profile_dinas->deskripsi, 600);

            return view('frontend.index', compact('contact', 'tugas_dinas', 'fungsi', 'layanan', 'profile_dinas', 'short_description', 'portal', 'testimoni', 'partners'));
        } catch (\Exception $e) {
            // Handle jika ada error, misalnya redirect ke halaman error atau tampilkan pesan
            return redirect()->route('home')->with('error', 'Terjadi kesalahan dalam mengambil data.');
        }
    }

    private function limitDescription($description, $limit)
    {
        if (strlen($description) <= $limit) {
            return $description;
        }

        $short_description = substr($description, 0, $limit);
        return $short_description;
    }
}
