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
    <section class="sectionHeight">
        <div class="icons">
            <i class="fa fa-th fa-5x" aria-hidden="true"></i>
        </div>
    </section>
    <section>
        <div class="parallax">
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


