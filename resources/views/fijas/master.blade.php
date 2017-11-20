<html>
    <head>
        @include('fijas.head')

    </head>
    <body>
        <!--Pantalla principal-->
        @yield('principal')

        <!--Navegador-->
        @include('fijas.nav')

        <!--Contenido-->
        @yield('section')

        @if(Request::url() === 'http://localhost/proyectoFinal/register' || Request::url() === 'http://localhost/proyectoFinal/login')
            <!-- Si es login o register, no mostramos footer -->
        @else
            <!--Footer-->
            @include('fijas.footer')
        @endif
    </body>
</html>