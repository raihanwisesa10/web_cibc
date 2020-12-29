<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Support\Facade\DB;
use App\Profile;

class Activity extends Model
{
    protected $table = "activities";
    protected $primaryKey = "id_act";
    protected $fillable = ['point', 'assist', 'steal', 'block', 'rebound'];

    // public function scopeGetProfile()
    // {
    //     global $data;
    //     $data = DB::table('profiles')
    //         ->join('activities', 'activities.id_pemain', '=', 'profiles.id_pemain')
    //         ->get();
    //     dd($data);
    //     die();
    // }
    public function profiles()
    {
        return $this->belongsTo('App\Profile', 'profiles.id_pemain');
    }
}
