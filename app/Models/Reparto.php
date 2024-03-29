<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Reparto extends Model
{
    protected $fillable = [
        'clave_repartidor', 'clave_usuario', 'usuario_id','empresa_id', 'oficina_id', 'taquilla_id',
    ];

    public static function getRepartos() {
        $empresa_id = Auth::guard('empresa')->user()->id;

        $repartos = Reparto::where('empresa_id', $empresa_id)->get();


        return $repartos;
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresa_reparto');
    }

    public function oficina()
    {
        return $this->belongsTo('App\Models\Oficina');
    }

    public function taquilla()
    {
        return $this->belongsTo('App\Models\Taquilla');
    }
}
