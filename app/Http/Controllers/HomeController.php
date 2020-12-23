<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
