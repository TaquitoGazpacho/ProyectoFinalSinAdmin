@extends('fijas.master')

@section('section')
    <?php
        $oficina = new \App\Models\Oficina("", "", "", "");

    ?>
    <h3>Oficina: {{ $taquillas[0]->oficina_id }}</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Numero Taquilla</th>
                <th>Tamaño</th>
                <th>Ocupada</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($taquillas as $taquilla)
                <tr>
                    <td>{{$taquilla->id}}</td>
                    <td>{{$taquilla->numero_taquilla}}</td>
                    <td>{{$taquilla->tamanio}}</td>
                    <td>{{$taquilla->ocupada}}</td>
                    <td>{{$taquilla->estado}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection