<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Oficina extends Model
{

    protected $fillable = [
        'ciudad', 'calle', 'num_calle',
    ];

    public function __construct($id, $ciudad, $calle, $num_calle){
        $this->id = $id;
        $this->ciudad = $ciudad;
        $this->calle = $calle;
        $this->num_calle = $num_calle;
    }

    public function taquilla()
    {
        return $this->hasMany('App\Models\Taquilla');
    }

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public static function getOficinas()
    {
        $oficinas = DB::table('oficinas')->select('id', 'ciudad', 'calle', 'num_calle')->orderBy('ciudad')->get();

        return $oficinas;
    }
}
