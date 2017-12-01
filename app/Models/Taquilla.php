<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taquilla extends Model
{
    protected $fillable = [
        'numero_taquilla', 'tamanio', 'ocupada',
    ];

}
