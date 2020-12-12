<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \App\Activity;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = Activity::all();
        return view('dashboard.activity', compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tambahdata_pemain');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'point' => 'required',
            'assist' => 'required',
            'steal' => 'required',
            'block' => 'required',
            'rebound' => 'required'
        ]);

        Activity::create($request->all());
        return redirect('/dashboard/activity')->with('status', 'Data Pemain Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pemain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pemain)
    {
        $activity = Activity::find($id_pemain);
        return view('dashboard.ubahdata_pemain', compact('activity'));
    }

    public function update(Request $request, $id_pemain)
    {
        $activity = Activity::findOrFail($id_pemain);
        $activity->nama = $request->get('nama');
        $activity->point = $request->get('point');
        $activity->assist = $request->get('assist');
        $activity->steal = $request->get('steal');
        $activity->block = $request->get('block');
        $activity->rebound = $request->get('rebound');
        $activity->save();
        return redirect('/dashboard/activity')->with('status', 'Data berhasil Diubah.');
    }

    public function back()
    {
        return redirect('/');
    }

    public function delete($id_pemain)
    {
        $activity = Activity::find($id_pemain);
        $activity->delete();
        return redirect('/dashboard/activity')->with('status', 'Data berhasil Dihapus.');
    }
}
