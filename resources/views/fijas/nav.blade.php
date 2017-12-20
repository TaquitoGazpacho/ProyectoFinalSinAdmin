<div id="nav">
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header dropup">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">LockBox</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{ Route::current()->getName() == 'index' ? 'active' : null }}"><a href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ route('index') }}#servicios">Servicios</a></li>
                    <li><a href="{{ route('index') }}#opiniones">Opiniones</a></li>
                    <li><a href="{{ route('index') }}#sobreLaEmpresa">Sobre la empresa</a></li>
                    <li><a href="{{ route('index') }}#contactanos">Contáctanos</a></li>
                </ul>
                @if(Auth::guard('empresa')->check() || Auth::guard('web')->check() || Auth::guard('admin')->check())
                    @auth('empresa')
                        <ul class="nav navbar-nav navbar-right">
                            <div id="droup" class="dropup">
                                <li class="dropdown navbar-right navbar-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::guard('empresa')->user()->nombre }}
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="well well-sm">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-md-8">
                                                                <h4>{{ Auth::guard('empresa')->user() -> name }}</h4>
                                                                <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                                                        </i></cite></small>
                                                                <p>
                                                                    <i class="glyphicon glyphicon-envelope"></i>email@example.com
                                                                    <br />
                                                                    <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                                                    <br />
                                                                    <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                                                                <!-- Split button -->
                                                                <div class="btn-group">
                                                                    <a href="{{ route('empresa.home') }}" type="button" class="btn btn-primary">
                                                                        Perfil</a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                                    </form>
                                                                    <a href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"  type="button" class="btn btn-primary">
                                                                        Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>-->
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    @endauth
                    @auth('web')
                        <ul class="nav navbar-nav navbar-right">
                            <div id="droup" class="dropup">
                                <li class="dropdown navbar-right navbar-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::guard('web')->user()->name }}
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                    <div class="well well-sm">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-md-8">
                                                                <h4>{{ Auth::guard('web')->user() -> name }} {{ Auth::guard('web')->user() -> surname }}</h4>
                                                                <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                                                        </i></cite></small>
                                                                <p>
                                                                    <i class="glyphicon glyphicon-envelope"></i>email@example.com
                                                                    <br />
                                                                    <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                                                    <br />
                                                                    <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                                                                <!-- Split button -->
                                                                <div class="btn-group">
                                                                    <a href="{{ route('home') }}" type="button" class="btn btn-primary">
                                                                        Perfil</a>
                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        {{ csrf_field() }}
                                                                    </form>
                                                                    <a href="{{ route('logout') }}"
                                                                       onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"  type="button" class="btn btn-primary">
                                                                        Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!--<a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                </form>-->
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    @endauth
                        @auth('admin')
                            <ul class="nav navbar-nav navbar-right">
                                <div id="droup" class="dropup">
                                    <li class="dropdown navbar-right navbar-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::guard('admin')->user()->name }}
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                                        <div class="well well-sm">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-md-8">
                                                                    <h4>{{ Auth::guard('admin')->user() -> name }}</h4>
                                                                    <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                                                            </i></cite></small>
                                                                    <p>
                                                                        <i class="glyphicon glyphicon-envelope"></i>email@example.com
                                                                        <br />
                                                                        <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                                                        <br />
                                                                        <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                                                                    <!-- Split button -->
                                                                    <div class="btn-group">
                                                                        <a href="{{ route('home') }}" type="button" class="btn btn-primary">
                                                                            Perfil</a>
                                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            {{ csrf_field() }}
                                                                        </form>
                                                                        <a href="{{ route('logout') }}"
                                                                           onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();"  type="button" class="btn btn-primary">
                                                                            Logout</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!--<a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                    </form>-->
                                            </li>
                                        </ul>
                                    </li>
                                </div>
                            </ul>
                        @endauth
                @else
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Route::current()->getName() === 'login' ? 'active' : null }}"><a href="{{ route('login') }}">Login</a></li>
                        <li class="{{ Route::current()->getName() === 'register' ? 'active' : null }}"><a href="{{ route('register') }}">Regístrate</a></li>
                    </ul>
                @endif
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</div>