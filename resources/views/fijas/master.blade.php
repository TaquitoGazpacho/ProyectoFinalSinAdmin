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

        <!--Footer-->
        @include('fijas.footer')
    </body>
</html>