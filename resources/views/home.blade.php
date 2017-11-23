@extends('fijas.master')

@section('principal')
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            @if(Auth::guard('admin')->check())
                                Hola {{ Auth::guard('admin')->user()->name}}
                            @elseif(Auth::guard('web')->check())
                                <p>Hola {{ Auth::guard('web')->user()->name}}</p>
                                Eres usuario
                                @if ( Auth::guard('web')->user()->invitado)
                                    INVITADO
                                @else
                                    NORMAL
                                @endif
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
