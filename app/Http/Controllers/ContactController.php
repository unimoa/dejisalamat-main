<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use Auth;

class ContactController extends Controller
{

    function store(Request $request)
    {
        // dd($request);
        $contact = new Contact();

        $contact -> name = $request -> name;
        $contact -> mail = $request -> email;
        $contact -> content = $request -> message;

        $contact -> save();

        return view('contact.create');
    }
}
