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

        {{--@if(Request::url() === 'http://localhost/proyectoFinal/register' ||--}}
        {{--Request::url() === 'http://localhost/proyectoFinal/login' ||--}}
        {{--Request::url() === 'http://localhost/proyectoFinal/admin/login' ||--}}
        {{--Request::url() === 'http://localhost/proyectoFinal/home' ||--}}
        {{--Request::url() === 'http://localhost/proyectoFinal/admin')--}}
            {{--<!-- Si es login o register, no mostramos footer -->--}}
        {{--@else--}}
            {{--<!--Footer-->--}}
            @include('fijas.footer')
        {{--@endif--}}
    </body>
</html>