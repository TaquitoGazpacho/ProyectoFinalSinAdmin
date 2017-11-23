<div id="nav">
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">ServiceBox</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{ Route::current()->getName() == 'index' ? 'active' : null }}"><a href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ route('index') }}#servicios">Servicios</a></li>
                    <li><a href="{{ route('index') }}#sobreLaEmpresa">Sobre la empresa</a></li>
                    <li><a href="{{ route('index') }}#contactanos">Contáctanos</a></li>
                </ul>
                @guest
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Route::current()->getName() === 'login' ? 'active' : null }}"><a href="{{ route('login') }}">Login</a></li>
                        <li class="{{ Route::current()->getName() === 'register' ? 'active' : null }}"><a href="{{ route('register') }}">Regístrate</a></li>
                    @else
                        <li class="dropdown navbar-right navbar-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endguest
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</div>