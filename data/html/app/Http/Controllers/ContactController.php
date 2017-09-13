<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        //$request->all()=[ dest, subject, content]
        Mail::to($request->dest)
            ->send(new Contact($request->all()));
    }
}