<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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

    public function player_detail($id_pemain)
    {
        $datas = Profile::join('activities', 'profiles.id_pemain', '=', 'activities.id_pemain')
            ->where('profiles.id_pemain', '=', $id_pemain)->get();

        // dd($datas);
        // die();
        return view('player_detail', compact('datas'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
}
