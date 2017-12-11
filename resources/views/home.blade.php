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
                <p>Hola {{ Auth::guard('web')->user()->name}}</p>
                Suscripcion {{Auth::guard('web')->user()->suscripcion->name}}<br/>
            </div>


            {{--EMPIEZA PERFIL--}}
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <img src="{{Auth::guard('web')->user()->image}}" alt="stack photo" class="img">
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <div style="border-bottom:1px solid black">
                            <h2>{{Auth::guard('web')->user()->name." ".Auth::guard('web')->user()->surname}}</h2>
                        </div>
                        <br/>
                        <ul class="details">
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>Email: {{Auth::guard('web')->user()->email}}</p></li>
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>Phone: {{Auth::guard('web')->user()->phone}}</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Sex: {{Auth::guard('web')->user()->sex}}</p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><a href="#">www.example.com</a></p></li>
                        </ul>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit Profile</button>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Profile</h4>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="Name">Email address</label>
                                                <input type="text" class="form-control" id="Name" placeholder="Name">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-warning" data-dismiss="modal">Submit</button>
                                            <input type="reset" name="reset" value="clear" class="btn btn-default" />
                                            <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

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
                    <form action="{{route('cambiarSuscripcion')}}" method="post">
                        {{ csrf_field() }}
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

                                            <input type="submit" name="button1" class="btn db-button-color-square btn-lg" value="Contrata Plan" />
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

                                            <input type="submit" name="button2" class="btn db-button-color-square btn-lg" value="Contrata Plan" />
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

                                            <input type="submit" name="button3" class="btn db-button-color-square btn-lg" value="Contrata Plan" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><!-- FIN PRECIO PLANES -->
            </div>
            {{--SETTINGS--}}
            <div role="tabpanel" class="tab-pane" id="settings">...</div>

            {{--REGISTROS--}}
            <div role="tabpanel" class="tab-pane" id="registros">
                <a class="btn btn-default" data-toggle="modal" data-target="#modalEmpresa">Registrar Empresa</a>
                @include('fijas.registroEmpresaReparto')
                <a class="btn btn-default" data-toggle="modal" data-target="#modalOficina">Registrar Oficina</a>
                @include('fijas.registroOficinas')

            </div>
            {{--EDITAR--}}
            <div role="tabpanel" class="tab-pane" id="editar">
                <a class="btn btn-default">Editar Empresa</a>
                <a class="btn btn-default">Editar Oficina</a>
            </div>
        </div>
    </div>

@endsection