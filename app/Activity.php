<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Support\Facade\DB;
use App\Profile;

class Activity extends Model
{
    protected $table = "activities";
    protected $primaryKey = "id_act";
    protected $fillable = ['id_pemain', 'point', 'assist', 'steal', 'block', 'rebound'];
}
