<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
class PhilippineController extends Controller
{
    //
    function index()
    {
        $philippines = Event::where('country_id', 2) ->get();
       
        return view('events.philippines',['philippines' => $philippines]);

    }

}
