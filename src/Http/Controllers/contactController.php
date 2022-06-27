<?php

namespace Sandeep\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sandeep\Contact\Models\Contact;
use Mail;
use Sandeep\Contact\Mail\ContactMailable;
class contactController extends Controller
{
    //

    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
            // Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
            Contact::create($request->all());
            return "Success";
    }
}
