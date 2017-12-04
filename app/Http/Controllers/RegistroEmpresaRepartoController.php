<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroEmpresaRepartoController extends Controller
{
    public function index(){
        return view('fijas.registroEmpresaReparto');
    }
}
