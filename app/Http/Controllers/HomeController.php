<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function players()
    {
        global $profiles;
        $profiles = Profile::all();
        return view('players', compact('profiles'));
    }

    public function about()
    {
        return view('about');
    }

    public function player_detail()
    {
        // $profiles = Profile::();
        return view('player_detail');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
