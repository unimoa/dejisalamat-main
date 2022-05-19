<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservations;
use Auth;

class ReservationsController extends Controller
{
    function store(Request $request)
    {
        // dd($request);
        // 処理
        //    if (Auth::check()) {
        //     // ユーザーはログインしている
        // }
        if (!Auth::check()) {
            return abort(404);
        }
        return view('top');
    }
}
