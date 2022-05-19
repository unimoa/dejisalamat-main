<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    function create($event_id)
    {
        $event = Event::find($event_id);
        return view('comments.create',['event'=>$event]);
    }

    function store(Request $request,$event_id)
    {

        $comment = new Comment();

        $comment -> event_id =  $event_id;

        $comment -> text = $request -> text;
        $comment -> rank = $request -> rating;
        $comment -> user_id = Auth::id();

        $comment -> save();

        return redirect()->route('comment.create',$event_id);
    }
}
