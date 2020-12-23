<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        global $profile;

        $profiles = Profile::all();
        return view(('dashboard.profile'), compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tambahdata_profil');
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
            'umur' => 'required',
            'tinggi' => 'required',
            'berat' => 'required',
            'posisi' => 'required',
            'tanggal_lahir' => 'required',
            'nomor_punggung' => 'required',
            'foto' => 'required'
        ]);

        $foto = $request->file('foto');

        $new_name = rand() . '.' . $foto->getClientOriginalExtension();

        $foto->move(public_path('uploads'), $new_name);

        Profile::create($request->all());
        return redirect('profile')->with('status', 'Data Pemain Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $profiles = Profile::find($id_pemain);
        return view('dashboard.ubahdata_profil', compact('profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pemain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pemain)
    {
        $profiles = Profile::find($id_pemain);
        $profiles->delete();
        return redirect('/dashboard/profile')->with('status', 'Data berhasil Dihapus.');
    }
}
