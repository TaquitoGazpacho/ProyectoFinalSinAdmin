<?php

namespace App\Http\Controllers;

use App\Models\Empresa_reparto;
use Illuminate\Http\Request;
use \Validator;

class RegistroEmpresaRepartoController extends Controller
{
    public function index(){
        return view('fijas.registroEmpresaReparto');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:empresa_repartos',
            'telefono' => 'required|integer',
            'nif' => 'required|string|max:255',
        ]);
    }

    protected function create(array $data)
    {
        return Empresa_reparto::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'nif' => $data['nif'],
        ]);
    }

    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $empresaReparto=$this->create($request->all());
        $empresaReparto->save();
        return view('/fijas/editarEmpresaReparto');
    }

}
