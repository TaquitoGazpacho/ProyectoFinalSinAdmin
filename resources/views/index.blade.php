@extends('fijas.master')

@section('principal')
    <header>
        <div class="centrado">
            <h1>
                Service<label>Box</label>
            </h1>
            <h2 id="TextoLanding">
                Nuestras oficinas en cualquier lado!!
            </h2>
        </div>
    </header>
@endsection

@section('section')
    <section class="sectionHeight" id="prueba">
        <div class="container">
            <div class="row text-center">
                <h2 style="color: #F96F00;">SERVICIOS</h2>
            </div>
        </div>
        <div class="container icons">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center distributed-icons">
                    <i class="fa fa-envelope-o fa-5x text-primary" aria-hidden="true"></i>
                    <h3>Envíos</h3>
                    <p class="text-muted">Recibe cómodamente tu paquete sin tener que estar en casa</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center distributed-icons">
                    <i class="fa fa-handshake-o fa-5x text-primary" aria-hidden="true"></i>
                    <h3>Digno de Confianza</h3>
                    <p class="text-muted">Servicio que te permite acceder a tu envío de forma segura</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center distributed-icons">
                    <i class="fa fa-map-marker fa-5x text-primary" aria-hidden="true"></i>
                    <h3>Localización</h3>
                    <p class="text-muted">Encuentra siempre una oficina muy cerca de tu casa o trabajo</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center distributed-icons">
                    <i class="fa fa-lock fa-5x text-primary" aria-hidden="true"></i>
                    <h3>Seguridad</h3>
                    <p class="text-muted">Gracias a nuestro sistema de seguridad, solo tú podrás acceder</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="parallax">
            <div class="descripcionServicio">
                <h1>ServiceBox</h1>
                <h2>Tu servicio de confianza</h2>
                <p>¡Olvídate de tener que ir a casa corriendo para recibir un paquete! Gracias a nuestro servicio, podrás volver a casa cuando quieras y recoger tu paquete por el camino</p>
                <p>Ofrecemos oficinas por toda la ciudad, solo tendrás que pedir en tu tienda que utilicen nuestro servicio. Será tan simple como recibir un código en tu móvil e introducirlo para abrir la taquilla. Sea la hora que sea.</p>
            </div>
        </div>
    </section>
    <section class="sectionHeight">
        <form class="well form-width">
                <h3>Si tiene alguna duda sobre nuestro servicio, no dude en contactarnos.</h3>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Tu nombre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="texto">Problema o pregunta</label>
                <textarea class="form-control" id="texto" aria-describedby="emailHelp" placeholder="Problema o pregunta"></textarea>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection



