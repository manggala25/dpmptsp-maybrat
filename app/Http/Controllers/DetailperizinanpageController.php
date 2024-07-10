<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class DetailperizinanpageController extends Controller
{
    public function show()
    {
        $contact = Contact::all();
        return view('frontend.detail-perizinan', compact('contact'));
    }
}
