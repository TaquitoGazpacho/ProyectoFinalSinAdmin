<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaquillasController extends Controller
{
    public function getMaxTaquilla($oficina_id){
        $max_taquilla= DB::table('taquillas')->where('oficina_id', $oficina_id)->max('numero_taquilla');
        if ($max_taquilla==""){
            $max_taquilla=0;
        }
        return $max_taquilla;
    }

    public function añadirTaquillas(Request $request){
        $max_taquilla=$this->getMaxTaquilla($request->oficina_id)+1;
        $taquillasG = $request->taquillaG;
        $taquillasM = $request->taquillaM;
        $taquillasS = $request->taquillaS;
        $insert=[];
        $taquillaCreada = true;
        for ($i=0;$i<$taquillasG;$i++) {
            array_push($insert,['numero_taquilla' => $max_taquilla, 'tamanio' => 'Grande', 'ocupada' => false, 'estado' => 'Funcionando', 'oficina_id' => $request->oficina_id]);
            $max_taquilla++;
        };
        for ($i=0;$i<$taquillasM;$i++) {
            array_push($insert,['numero_taquilla' => $max_taquilla, 'tamanio' => 'Mediana', 'ocupada' => false, 'estado' => 'Funcionando', 'oficina_id' => $request->oficina_id]);
            $max_taquilla++;
        };
        for ($i=0;$i<$taquillasS;$i++) {
            array_push($insert,['numero_taquilla' => $max_taquilla, 'tamanio' => 'Pequeña', 'ocupada' => false, 'estado' => 'Funcionando', 'oficina_id' => $request->oficina_id]);
            $max_taquilla++;
        };
        DB::table('taquillas')->insert($insert);
        return redirect()->route('listarTaquillas', ['id'=> $request->oficina_id, 'taquillaCreada'=> $taquillaCreada]);

    }

    public function editar(Request $request){
        DB::table('taquillas')->where('id', $request->ids)->update(['estado'=>$request->event]);
        return $request->event;
    }

}
