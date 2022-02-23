<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {

        return view('tweets.index');
    }

    public function show(Tweet $tweet)
    {
        return view('tweets.show',compact('tweet'));
    }
}
