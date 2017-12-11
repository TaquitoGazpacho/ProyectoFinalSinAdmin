<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;
use App\Models\Empresa_reparto;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oficinas = Oficina::getOficinas();
        $empresas = Empresa_reparto::getEmpresas();
        return view('fijas.admin', ['oficinas' => $oficinas, 'empresas' => $empresas]);
    }
}
