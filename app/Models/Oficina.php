<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{

    protected $fillable = [
        'ciudad', 'calle', 'numero',
    ];

    public function taquilla()
    {
        return $this->hasMany('App\Models\Taquilla');
    }
}