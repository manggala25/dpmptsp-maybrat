<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\MenuHome;

class DetailperizinanpageController extends Controller
{
    public function show()
    {
        $contact = Contact::all();
        $menuhome = MenuHome::findOrFail(1);
        
        $whatsappContact = $contact->firstWhere('nama_informasi', 'Whatsapp');

        return view('frontend.detail-perizinan', compact('contact', 'menuhome', 'whatsappContact'));
    }
}
