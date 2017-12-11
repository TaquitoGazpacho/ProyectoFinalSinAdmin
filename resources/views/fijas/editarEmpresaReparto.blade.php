@extends('fijas.master')

@section('section')


    <form id="editarEmpresaReparto" method="POST" action="{{ route('actualizarEmpresaReparto') }} ">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputNombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="exampleInputNombre" value="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail" value="">
            </div>
            <div class="form-group">
                <label for="exampleInputTelefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" id="exampleInputTelefono" value="">
            </div>
            <div class="form-group">
                <label for="exampleInputNif">Nif</label>
                <input type="text" name="nif" class="form-control" id="exampleInputNif" value="">
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-warning">Editar empresa reparto</button>
            <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
        </div>

    </form>

@endsection()