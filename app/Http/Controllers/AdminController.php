<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;
use App\Models\Empresa_reparto;
use Illuminate\Support\Facades\DB;

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
        return view('fijas.admin');
    }

    public function mostrarDatosEmpresa(Request $request) {

        $nombre = $request->empresa;

        $datos = DB::table('empresa_repartos')
            ->where('nombre', $nombre)
            ->get();

        return $datos;
    }
}
