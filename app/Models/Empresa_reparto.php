<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empresa_reparto extends Authenticatable
{
    protected $table= "empresa_repartos";

    protected $fillable = [
        'nombre', 'email', 'telefono', 'nif', 'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function reparto()
    {
        return $this->hasMany('App\Models\Reparto');
    }

    public static function getEmpresas() {
        $empresas = DB::table('empresa_repartos')->get();

        return $empresas;
    }
}
