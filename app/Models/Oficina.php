<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Oficina extends Model
{

    protected $fillable = [
        'ciudad', 'calle', 'num_calle',
    ];

    public function __construct(){
        $this->ciudad="";
        $this->calle="";
        $this->num_calle="";
    }

    public function setId($id){
        $this->id=$id;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }

    public function getCalle(){
        return $this->calle;
    }

    public function setCalle($calle){
        $this->calle=$calle;
    }

    public function getNumCalle(){
        return $this->num_calle;
    }

    public function setNumCalle($num_calle){
        $this->num_calle=$num_calle;
    }

    public function getOficina($id){
        $office=Oficina::where('id', $id)->first();
        $this->id =$id;
        $this->setCiudad($office->ciudad);
        $this->setCalle($office->calle);
        $this->setNumCalle($office->num_calle);
    }

    public function taquilla()
    {
        return $this->hasMany('App\Models\Taquilla');
    }

    public function user()
    {
        return $this->hasMany('App\Models\User');
    }

    public function reparto()
    {
        return $this->hasMany('App\Models\Reparto');
    }

    public static function getOficinas()
    {
        $oficinas = DB::table('oficinas')->select('id', 'ciudad', 'calle', 'num_calle')->orderBy('ciudad')->get();
        return $oficinas;
    }
}
