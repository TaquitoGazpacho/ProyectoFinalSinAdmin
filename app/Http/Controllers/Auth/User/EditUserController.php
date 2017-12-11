<?php

namespace App\Http\Controllers\Auth\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \Validator;

class EditUserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:30',
            'apellido' => 'required|string|max:50',
            'telefono' => 'required|integer',
        ]);
    }
    public function actualizar(Request $request)
    {
        DB::table('users')
            ->where('id', Auth::guard('web')->user()->id)
            ->update([
                'name' => $request->nombre,
                'surname' => $request->apellido,
                'phone' => $request->telefono,
                'sex' => $request->sexo,
            ]);

    }
    public function ejecutar(Request $request)
    {
        $this->validator($request->all())->validate();
        $this->actualizar($request);

        return redirect()->route('home');
    }
}
