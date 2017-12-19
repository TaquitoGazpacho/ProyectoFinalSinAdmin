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
            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
    public function guardarImagen($imagen){
        $imageName = 'prueba' . '.jpg';// . $imagen->getClientOriginalExtension();

        $imagen->move(
            base_path() . '/public/img/userImg/', $imageName
        );
    }
    public function ejecutar(Request $request)
    {
        $this->validator($request->all())->validate();


        if ($request->file('imagen')){
            $image = $request->file('imagen');

            $input['imagename'] = time() . '-' . Auth::guard('web')->user()->id . '-' . Auth::guard('web')->user()->name . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/img/userImg');

            $image->move($destinationPath, $input['imagename']);

            Auth::guard('web')->user()->changeImage($input['imagename']);
        }

        $this->actualizar($request);

        return redirect()->route('home');
    }

    public function cambiarOficina(Request $request){
        $oficina = $request->ciudad;
        Auth::guard('web')->user()->cambiarOficina($oficina);

        return redirect()->route('home');
    }
}
