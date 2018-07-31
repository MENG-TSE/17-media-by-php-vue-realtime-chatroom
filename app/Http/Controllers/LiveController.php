<?php

namespace App\Http\Controllers;

use App\Anchor;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LiveController extends Controller
{
    public function index()
    {
        $anchors = Anchor::all();
        return view('welcome',compact('anchors'));
    }

    public function anchor(Anchor $anchor)
    {
        return view('singleAnchor',compact('anchor'));
    }

    public function newComment(Request $request)
    {
        $comment = new Comment;

        $comment->anchor_id = $request['anchor'];
        $comment->user_id = Auth::id();
        $comment->content = $request['comment'];
        $comment->save();

        return back();
    }

    
}
