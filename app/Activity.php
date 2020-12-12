<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table="activities";
    protected $primaryKey="id_pemain";
    protected $fillable = ['nama', 'point', 'assist', 'steal', 'block', 'rebound'];
}
