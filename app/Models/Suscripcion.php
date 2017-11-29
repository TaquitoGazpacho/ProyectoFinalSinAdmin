<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $fillable = [
        'name', 'description', 'precio',
    ];

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }
}
