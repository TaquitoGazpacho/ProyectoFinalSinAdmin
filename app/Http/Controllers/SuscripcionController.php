<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Suscripcion;
use App\Models\User;

class SuscripcionController extends Controller
{
    public function cambiarSuscripcion(Request $request){
        if ($request->button1 != ""){
            $plan="Básico";
        } else if ($request->button2 != ""){
            $plan="Premium";
        } else if($request->button3 != ""){
            $plan="Empresa";
        }
        $suscripcion = Suscripcion::where('name', $plan)->first();
        $user_id = Auth::guard('web')->user()->id;
        User::where('id', $user_id)->update(['suscripcion_id' => $suscripcion->id]);
        return redirect()->route('home');
    }
}
