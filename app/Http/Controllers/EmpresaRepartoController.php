<?php

namespace App\Http\Controllers;

use App\Models\Empresa_reparto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Validator;


class EmpresaRepartoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:empresa,admin');
    }

    public function index(){
        return view('fijas.empresa');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:empresa_repartos',
            'telefono' => 'required|integer',
            'nif' => 'required|string|max:255',
            'password'=> 'required|min:6'
        ]);
    }

    protected function create(array $data)
    {
        return Empresa_reparto::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'nif' => $data['nif'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $empresaReparto=$this->create($request->all());
        $empresaReparto->save();


        return redirect()->route('admin.home');
    }

    public function actualizar(Request $request)
    {
        DB::table('empresa_repartos')
            ->where('id', $request->id)
            ->update([  'nombre' => $request->nombre,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'nif' => $request->nif,
            ]);

        //return redirect()->route('admin.home');
    }

}
