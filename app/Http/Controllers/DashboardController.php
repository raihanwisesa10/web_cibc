<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    // public function activity()
    // {
    //     $activity = Activity::all();
    //     return view('dashboard.activity', ['activity' => $activity]);
    // }

    // public function profile()
    // {
    //     return view('dashboard.profile');
    // }
}
