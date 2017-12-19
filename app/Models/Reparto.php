<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reparto extends Model
{
    protected $table='empresa_repartos';

    protected $fillable = ['nombre', 'email', 'telefono', 'nif'];

    protected $hidden = [
        'password',
    ];
}
