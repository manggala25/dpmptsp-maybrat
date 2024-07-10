<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\MenuHome;

class KontakpageController extends Controller
{
    public function index()
    {
        $contact = Contact::select('nama_informasi', 'link', 'icon', 'detail', 'status')
            ->where('status', 'aktif')
            ->orderByRaw("CASE WHEN nama_informasi = 'Alamat Kantor' THEN 1 ELSE 0 END, nama_informasi")
            ->get();
        $gmaps_embed = $contact->firstWhere('nama_informasi', 'Gmaps Embed');

        $menuhome = MenuHome::findOrFail(1);

        return view('frontend.kontak', compact('contact', 'gmaps_embed', 'menuhome'));
    }
}
