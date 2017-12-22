<title>Landing Page Taquillas</title>
<meta charset="UTF-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.css') }}">
<!-- NOMBRE FUENTE: Vollkorn SC, serif -->
<link href="https://fonts.googleapis.com/css?family=Vollkorn+SC:700" rel="stylesheet">

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

<!-- JavaScript -->
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>

<!-- SweetAlert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

<script>
    window.onload = getHeaderHeight;
    function getHeaderHeight(){
        try {
            var header = document.getElementsByTagName('header')[0];
            var nav = document.getElementById('nav');
            var navHeight = parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
            var html = document.getElementsByTagName('html')[0];
            header.style.height = parseInt(window.innerHeight) - navHeight + 'px';
            // if (document.URL.includes("login") || document.URL.includes("register")) {
            //     //document.body.style.height = parseInt(window.innerHeight) + 'px';
            //     //html.style.height = parseInt(window.innerHeight) + 'px';
            //     document.body.style.overflow = 'hidden';
            // }
            addEvent();
        } catch (e) {}
    }

</script>

<!-- Favicon -->
<!-- <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"> -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">