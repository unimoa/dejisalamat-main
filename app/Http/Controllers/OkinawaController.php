<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;

class OkinawaController extends Controller
{
    //
    function index()
    {
  
        $okinawa = Event::where('country_id', 1) ->get();
       
        return view('events.okinawa',['okinawa' => $okinawa]);
    }

}
