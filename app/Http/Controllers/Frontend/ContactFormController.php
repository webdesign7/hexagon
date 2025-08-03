<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(ContactFormRequest $request)
    {
        $validatedData = $request->validated();

        Mail::to('info@hexagonpolicy.com')->bcc('sergiu.c@live.com')->send(new ContactMail($validatedData));

        return back()->withFragment('contact')->with('success', 'Thank you for your message!');
    }
}
