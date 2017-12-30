<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;
use App\Models\Empresa_reparto;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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

    public function editUser(Request $request){
        $user_id = $request->id;

        $usuario = User::where('id', $user_id)->get();

        return $usuario;
    }

    public function cambiarDatosUser(Request $request){
        User::where('id', $request->id)
            ->update([
                'name' => $request->nombre,
                'surname' => $request->apellido,
                'email' => $request->email,
                'phone' => $request->telefono,
                'suscripcion_id' => $request->suscripcion,
                'sex' => ucfirst($request->userSex)
            ]);

        //return redirect()->route('admin.home');
    }
}
