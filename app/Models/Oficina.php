<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Oficina extends Model
{

    protected $fillable = [
        'ciudad', 'calle', 'num_calle',
    ];

    public function taquilla()
    {
        return $this->hasMany('App\Models\Taquilla');
    }

    public static function getCiudades() {
        $ciudades = DB::table('oficinas')->select('ciudad')->groupBy('ciudad')->get();

        return $ciudades;
    }

    public static function getCalles() {
        $calles = DB::table('oficinas')->select('calle', 'num_calle');

        return $calles;
    }
}
