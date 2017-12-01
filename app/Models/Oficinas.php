<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficinas extends Model
{

    protected $fillable = [
        'ciudad', 'calle', 'numero', 'num_taquillas', 'num_taquillas_libres',
    ];

    public function taquilla()
    {
        return $this->hasMany('App\Models\Taquilla');
    }
}
