@php

    use App\Models\Reparto;

    $repartos = Reparto::getRepartos();
@endphp
@extends('fijas.master')

@section('section')
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Repartos de {{ Auth::guard('empresa')->user()->nombre }}</div>
        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Calle</th>
                    <th>Ciudad</th>
                    <th>Taquilla</th>
                    <th>Cliente</th>
                    <th>Clave Repartidor</th>
                    <th>Clave Usuario</th>
                </tr>
            </thead>
            <tbody>
                @foreach($repartos as $reparto)
                    <tr>
                        <td>{{ DB::table('oficinas')->select('calle')->where('id', $reparto->oficina_id)->get()[0]->calle }}</td>
                        <td>{{ DB::table('oficinas')->select('ciudad')->where('id', $reparto->oficina_id)->get()[0]->ciudad }}</td>
                        <td>{{ DB::table('taquillas')->select('numero_taquilla')->where('id', $reparto->taquilla_id)->get()[0]->numero_taquilla }}</td>
                        <td>{{ DB::table('users')->select('name', 'surname')->where('id', $reparto->usuario_id)->get()[0]->name }}
                            {{ DB::table('users')->select('name', 'surname')->where('id', $reparto->usuario_id)->get()[0]->surname }}
                        </td>
                        <td>{{ $reparto->clave_repartidor }}</td>
                        <td>{{ $reparto->clave_usuario }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection