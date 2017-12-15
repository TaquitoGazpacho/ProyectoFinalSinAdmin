@php

    use App\Models\Oficina;
    use App\Models\Empresa_reparto;

    $ciudad = null;
    $oficinas = Oficina::getOficinas();
    $empresas = Empresa_reparto::getEmpresas();
@endphp
@extends('fijas.master')

@section('section')

    <div class="container well">
        <ul class="nav nav-tabs" role="tablist" id="userTabs">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#registros" aria-controls="registro" role="tab" data-toggle="tab">Registros</a></li>
            <li role="presentation"><a href="#empresas" aria-controls="empresas" role="tab" data-toggle="tab">Empresas</a></li>
            <li role="presentation"><a href="#oficinas" aria-controls="oficinas" role="tab" data-toggle="tab">Oficinas</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            {{--HOME--}}
            <div role="tabpanel" class="tab-pane active" id="home">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                Hola {{ Auth::guard('admin')->user()->name}}
            </div>


            {{--EMPIEZA PERFIL--}}
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <div style="border-bottom:1px solid black">
                            <h2>{{Auth::guard('admin')->user()->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            {{--REGISTROS--}}
            <div role="tabpanel" class="tab-pane" id="registros">
               <h2>Estoy vacío por dentro :(</h2>

            </div>
            {{--Empresas--}}
            <div role="tabpanel" class="tab-pane" id="empresas">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Nif</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empresas as $empresa)
                            <tr>
                                <td>{{$empresa->id}}</td>
                                <td>{{$empresa->nombre}}</td>
                                <td>{{$empresa->email}}</td>
                                <td>{{$empresa->telefono}}</td>
                                <td>{{$empresa->nif}}</td>
                                <td><button name="{{$empresa->nombre}}" class="btn btn-default" onclick="mostrarEmpresa(event)" data-toggle="modal" data-target="#modalEditarEmpresa">Editar</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-warning" data-toggle="modal" data-target="#modalEmpresa">Registrar Empresa</a>
                @include('fijas.registroEmpresaReparto')
                {{--Modal--}}
                @include('fijas.editarEmpresaReparto')

            </div>

            <div role="tabpanel" class="tab-pane" id="oficinas">
                <form action="{{route('eliminarOficinas')}}" method="post">
                    {{ csrf_field() }}
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ciudad</th>
                                <th>Calle</th>
                                <th>Número</th>
                                <th>Cant. Taquillas</th>
                                <th>Añadir Taquillas</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($oficinas as $oficina)
                                <tr>
                                    <td>{{ $oficina->id }}</td>
                                    <td>{{ $oficina->ciudad }}</td>
                                    <td>{{ $oficina->calle }}</td>
                                    <td>{{ $oficina->num_calle }}</td>
                                    <?php $ofi = new \App\Models\Oficina($oficina->id, $oficina->ciudad, $oficina->calle, $oficina->num_calle); ?>
                                    <td>{{ sizeof($ofi->taquilla) }}</td>
                                    <td><a href="{{ route( 'listarTaquillas', ['id' => $oficina->id]) }}" class="btn btn-default">Listar taquillas</a></td>
                                    <td><a href="{{ route('editarOficina', ['id' => $oficina->id ]) }}" class="btn btn-default">Editar</a></td>
                                    <td><input type="checkbox" name="delete[]" value="{{$oficina->id}}" /></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-warning" data-toggle="modal" data-target="#modalOficina">Registrar Oficina</a>
                    <input type="submit" value="Eliminar" class="btn btn-error pull-right"/>
                </form>
                @include('fijas.registroOficinas')
            </div>
        </div>
    </div>

    @if(isset($empresaRegistrada) &&  $empresaRegistrada)
        <script>
            swal("Registro realizado", "Has registrado una empresa", "success");
        </script>
    @elseif(isset($oficinaRegistrada) &&  $oficinaRegistrada)
        <script>
            swal("Registro realizado", "Has registrado una oficina", "success");
        </script>
    @endif

@endsection
