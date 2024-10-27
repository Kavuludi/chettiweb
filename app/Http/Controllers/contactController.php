<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Alert;

class contactController extends Controller
{
    //
    public function store(Request $request)
    {
        $contact = new ContactUs();
        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        Alert::success('Contact Us', 'Your Message Sent');
        return redirect()->back();
    }
}
