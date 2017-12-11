<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroOficinaController extends Controller
{

    protected function create(array $data)
    {
        return Oficina::create([
            'ciudad' => $data['ciudad'],
            'calle' => $data['calle'],
            'numero' => $data['numero'],
        ]);
    }

    protected function register(Request $request)
    {
        $oficina = $this->create($request->all());
        DB::table('oficinas')->insert(
            ['ciudad' => $oficina->ciudad,
                'calle' => $oficina->calle,
                'numero' => $oficina->numero]
        );

    }

}
