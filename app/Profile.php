<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";
    protected $primaryKey = "id_pemain";
    protected $fillable = ['nama', 'umur', 'tinggi', 'berat', 'posisi', 'tanggal_lahir', 'no_punggung', 'gambar_pemain'];
}
