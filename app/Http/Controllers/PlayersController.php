<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Activity;

class PlayersController extends Controller
{
    //
    public function activity()
    {
        $activity = Activity::all();
        return view('activity', ['activity' => $activity]);
    }

    public function profiles()
    {
        return view('profiles');
    }

    public function about()
    {
        return view('about');
    }
}
