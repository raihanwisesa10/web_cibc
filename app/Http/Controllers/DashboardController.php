<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
}
