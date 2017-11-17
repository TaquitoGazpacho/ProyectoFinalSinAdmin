@extends('layouts.app')

@section('content')
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
                            Hola {{ Auth::guard('web')->user()->name}}
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
