<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa_reparto extends Model
{
    protected $fillable = [
        'nombre', 'email', 'telefono', 'nif',
    ];
}
