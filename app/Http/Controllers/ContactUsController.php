<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'contact_me_by_fax_only' => 'max:0',
            'my_name' => 'max:0',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('info@nkydance.com')->send(new ContactUsMail($data));

        return redirect('/')->with('message', 'Thanks for your message. We\'ll be in touch.');

    }
}
