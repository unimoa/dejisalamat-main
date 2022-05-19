<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class EventController extends Controller
{

    function show($event_id)
    {
        $event = Event::find($event_id);
        $ratings = $event->comment_ranks();

        $sum = 0;
        foreach ($ratings as $id=>$value) {
            $sum+=$value;
        }

        if($sum == 0){
            $event -> rating = 0;
        }else{
            $event -> rating = round($sum / count($ratings), 1);
        }

        return view ('events.show', ['event'=>$event]);
    }
}

