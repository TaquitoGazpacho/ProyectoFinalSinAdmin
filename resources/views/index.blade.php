@extends('fijas.master')

@section('principal')
    <header>
        <div class="centrado">
            <h1>
                Lock<label>Box</label>
            </h1>
            <h2 id="TextoLanding">
                Nuestras oficinas en cualquier lado!!
            </h2>
        </div>
    </header>
@endsection

@section('section')
    <section class="sectionHeight" id="servicios">
        <div class="container">
            <div class="row text-center">
                <h2 style="color: #F96F00;">Servicios</h2>
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
        <hr id="opiniones">
        <!-- COMENTARIOS USUARIOS -->
        <div class="container content">
            <div class="heading">
                <h2 style="color: #F96F00;"><strong>Nuestros Usuarios Nos Avalan</strong></h2>
                <p>Generamos confianza</p>
            </div><!-- //end heading -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-members">
                        <div class="team-avatar">
                            <img class="img-responsive" src="http://keenthemes.com/assets/bootsnipp/member1.png" alt="">
                        </div>
                        <div class="team-desc">
                            <h4>El paquete siempre en su sitio</h4>
                            <span>"Puedo hacer lo que quiera y olvidarme del pedido, se que siempre llegará a una taquilla"</span>
                            <p>Ricardo Martinez, Ávila</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-members">
                        <div class="team-avatar">
                            <img class="img-responsive" src="http://keenthemes.com/assets/bootsnipp/member2.png" alt="">
                        </div>
                        <div class="team-desc">
                            <h4>Facilidad y Comodidad</h4>
                            <span>Es muy cómodo poder recoger el paquete cuando y donde quiera, ademas de la facilidad para localizar sus oficinas</span>
                            <p>MªDolores Dominguez, Sevilla</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-members">
                        <div class="team-avatar">
                            <img class="img-responsive" src="http://keenthemes.com/assets/bootsnipp/member3.png" alt="">
                        </div>
                        <div class="team-desc">
                            <h4>Tecnología de confianza</h4>
                            <span>Gracias a su sistema de clave de usar y tirar mis pedidos estrán siempre a salvo</span>
                            <p>Jacinto Bermudez, Zaragoza</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- FIN COMENTARIOS USUARIOS -->

    </section> <!-- FIN ID SERVICIOS -->
    <section>
        <div class="parallax" id="sobreLaEmpresa">
            <div class="descripcionServicio">
                <h1>LockBox</h1>
                <h2>Tu servicio de confianza</h2>
                <h4>¡Olvídate de tener que ir a casa corriendo para recibir un paquete! Gracias a nuestro servicio, podrás volver a casa cuando quieras y recoger tu paquete por el camino</h4>
                <h4>Ofrecemos oficinas por toda la ciudad, solo tendrás que pedir en tu tienda que utilicen nuestro servicio. Será tan simple como recibir un código en tu móvil e introducirlo para abrir la taquilla. Sea la hora que sea.</h4>
            </div>
        </div>
    </section>
    <section class="sectionHeight form">
        <form class="well form-width" id="contactanos">
                <h3>Si tiene alguna duda sobre nuestro servicio, no dude en contactarnos.</h3>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Tu nombre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="texto">Problema o pregunta</label>
                <textarea class="form-control" id="texto" name="textarea" aria-describedby="emailHelp" placeholder="Problema o pregunta" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="reset" id="clear" class="btn btn-error" value="Clear"/>

            <div id="errores"></div>
        </form>
    </section>
    @if (alert()->ready())
        <script>
            sweetAlertSimple("{!! alert()->message() !!}", "{!! alert()->option('text') !!}", "{!! alert()->type() !!}");
        </script>
    @endif
@endsection



