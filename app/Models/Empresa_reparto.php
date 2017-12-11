<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empresa_reparto extends Model
{
    protected $fillable = [
        'nombre', 'email', 'telefono', 'nif',
    ];

    public static function getEmpresas() {
        $empresas = DB::table('empresa_repartos')->get();

        return $empresas;
    }
}
