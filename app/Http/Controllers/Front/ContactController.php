<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\front\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function viewContact()
    {
        return view('front.contact.contact');
    }


    public function addContact(Request $request)
    {
        Contact::saveContactData($request);
        return redirect()->back()->with('message', 'Contact Added Successfully');
    }
}
