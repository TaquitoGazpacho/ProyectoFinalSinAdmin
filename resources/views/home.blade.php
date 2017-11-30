@extends('fijas.master')

@section('section')

    <div class="container well">
        <ul class="nav nav-tabs" role="tablist" id="userTabs">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
            <li role="presentation"><a href="#suscripcion" aria-controls="suscripcion" role="tab" data-toggle="tab">Suscripcion</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
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
                @if(Auth::guard('admin')->check())
                    Hola {{ Auth::guard('admin')->user()->name}}
                @elseif(Auth::guard('web')->check())
                    <p>Hola {{ Auth::guard('web')->user()->name}}</p>
                    Suscripcion {{Auth::guard('web')->user()->suscripcion->name}}<br/>
                    Eres usuario
                    @if ( Auth::guard('web')->user()->invitado)
                        INVITADO
                    @else
                        NORMAL
                    @endif
                @endif
            </div>


            {{--EMPIEZA PERFIL--}}
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <div style="border-bottom:1px solid black">
                            <h2>John Doe</h2>
                        </div>
                        <br/>
                        <ul class="details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>+91 90000 00000</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{Auth::guard('web')->user()->email}}</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Hyderabad</p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="#">www.example.com</a></p></li>
                        </ul>
                    </div>
                </div>
            </div>



            {{--SUSCRIPCIONES--}}
            <div role="tabpanel" class="tab-pane" id="suscripcion">
                <div class="container">
                    <div class="heading">
                        <h2 style="color: #F96F00;"><strong>Planes a gusto de todos</strong></h2>
                        <p>Nos adaptamos a tus necesidades</p>
                    </div><!-- //end heading -->
                    <div class="row db-padding-btm db-attached">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="db-wrapper">
                                <div class="db-pricing-eleven db-bk-color-one">
                                    <div class="price">
                                        10<sup>€</sup>
                                        <small>anuales</small>
                                    </div>
                                    <div class="type">
                                        Básico
                                    </div>
                                    <ul>

                                        <li><i class="glyphicon glyphicon-print"></i>1 taquilla</li>
                                        <li><i class="glyphicon glyphicon-time"></i>Usos ilimitados</li>
                                        <li><i class="glyphicon glyphicon-trash"></i>Tamaño taquillas:<br>Pequeña y mediana</li>
                                    </ul>
                                    <div class="pricing-footer">

                                        <a href="{{route('register')}}" class="btn db-button-color-square btn-lg">Contrata Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="db-wrapper">
                                <div class="db-pricing-eleven db-bk-color-two popular">
                                    <div class="price">
                                        20<sup>€</sup>
                                        <small>anuales</small>
                                    </div>
                                    <div class="type">
                                        Premium
                                    </div>
                                    <ul>

                                        <li><i class="glyphicon glyphicon-print"></i>3 taquilla</li>
                                        <li><i class="glyphicon glyphicon-time"></i>Usos ilimitados</li>
                                        <li><i class="glyphicon glyphicon-trash"></i>Tamaño taquillas:<br>Peuqeña, mediana y grande</li>
                                    </ul>
                                    <div class="pricing-footer">

                                        <a href="{{route('register')}}" class="btn db-button-color-square btn-lg">Contrata Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="db-wrapper">
                                <div class="db-pricing-eleven db-bk-color-three">
                                    <div class="price">
                                        150<sup>€</sup>
                                        <small>anuales</small>
                                    </div>
                                    <div class="type">
                                        Empresas
                                    </div>
                                    <ul>

                                        <li><i class="glyphicon glyphicon-print"></i>10 taquillas</li>
                                        <li><i class="glyphicon glyphicon-time"></i>Usos ilimitados</li>
                                        <li><i class="glyphicon glyphicon-trash"></i>Tamaños extra aparte de los regulares, bajo necesidad.</li>
                                    </ul>
                                    <div class="pricing-footer">

                                        <a href="{{route('register')}}" class="btn db-button-color-square btn-lg">Contrata Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- FIN PRECIO PLANES -->
            </div>
            {{--SETTINGS--}}
            <div role="tabpanel" class="tab-pane" id="settings">...</div>
        </div>
    </div>

@endsection
