<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Support\Facade\DB;
use App\Activity;

class Profile extends Model
{
    protected $table = "profiles";
    protected $primaryKey = "id_pemain";
    protected $fillable = ['nama', 'umur', 'tinggi', 'berat', 'posisi', 'tanggal_lahir', 'nomor_punggung', 'foto'];

    public function activity()
    {
        return $this->hasOne('App\Activity', 'activities.id_act');
    }

    // protected $posisi = [
    //     'Point Guard',
    //     'Shooting Guard',
    //     'Small Forward',
    //     'Power Forward',
    //     'Center'
    // ];

    // public function getPosisiAttribute($value)
    // {
    //     return $this->posisi;
    // }
}
