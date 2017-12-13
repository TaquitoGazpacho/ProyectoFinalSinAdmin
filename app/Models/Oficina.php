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

    public static function getOficinas()
    {
        $oficinas = DB::table('oficinas')->select('id', 'ciudad', 'calle', 'num_calle')->orderBy('ciudad')->get();

        return $oficinas;
    }
}
