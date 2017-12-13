@php
    $ciudad = null;
@endphp
@extends('fijas.master')

@section('section')

    <div class="container well">
        <ul class="nav nav-tabs" role="tablist" id="userTabs">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#registros" aria-controls="registro" role="tab" data-toggle="tab">Registros</a></li>
            <li role="presentation"><a href="#editar" aria-controls="editar" role="tab" data-toggle="tab">Editar</a></li>
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
                <a class="btn btn-default" data-toggle="modal" data-target="#modalEmpresa">Registrar Empresa</a>
                @include('fijas.registroEmpresaReparto')
                <a class="btn btn-default" data-toggle="modal" data-target="#modalOficina">Registrar Oficina</a>
                @include('fijas.registroOficinas')

            </div>
            {{--EDITAR--}}
            <div role="tabpanel" class="tab-pane" id="editar">
                <select name="empresa">
                    <option>Selecciona la empresa</option>
                    @foreach($empresas as $empresa)
                        <option value="{{ $empresa->nombre }}">{{ $empresa->nombre }}</option>
                    @endforeach
                </select>
                <input id="botonEmpresa" type="button" class="btn btn-default" data-toggle="modal" data-target="#modalEditarEmpresa" value="Seleccionar empresa">
                @include('fijas.editarEmpresaReparto')

                <form method="POST" action="{{ route('editarOficina') }}">
                    {{ csrf_field() }}
                    <select name="oficina">
                        <option>Selecciona la oficina</option>
                        @foreach($oficinas as $oficina)
                            @if($ciudad === $oficina->ciudad)
                                //No hace nada
                            @else
                                <optgroup label="{{ $oficina->ciudad }}"></optgroup>
                                @php
                                    $ciudad = $oficina->ciudad;
                                @endphp
                            @endif
                            @if($ciudad === $oficina->ciudad)
                                    <option value="{{ $oficina->id }}">{{ $oficina->calle }}, {{ $oficina->num_calle }}</option>
                            @endif
                        @endforeach
                    </select>
                    <input type="submit" class="btn btn-default" value="Seleccionar oficina">
                </form>
            </div>
        </div>
    </div>

@endsection
