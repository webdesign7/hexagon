<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'message' => 'required|min:10',
            'phone' => 'nullable',
            'company_name' => 'nullable',
        ]);

        Mail::to('sergiu.c@live.com')->send(new ContactMail($validatedData));

        return back()->withFragment('contact')->with('success', 'Thank you for your message!');
    }
}
