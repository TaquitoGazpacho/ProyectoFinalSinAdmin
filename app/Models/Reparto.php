<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reparto extends Model
{
    protected $fillable = [
        'clave_repartidor', 'clave_usuario', 'empresa_id', 'oficina_id', 'taquilla_id'
    ];

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
