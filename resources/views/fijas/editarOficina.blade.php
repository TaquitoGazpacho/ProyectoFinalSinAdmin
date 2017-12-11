@extends('fijas.master')

@section('section')


<form id="editarOficina" method="POST" action="{{ route('actualizarOficina') }} ">
    {{ csrf_field() }}
    <div class="modal-body">
        <div class="form-group">
            <label for="exampleInputCiudad">Ciudad</label>
            <input type="text" name="ciudad" class="form-control" id="exampleInputCiudad" value="<?= $datos[0]->ciudad;?>">
        </div>
        <div class="form-group">
            <label for="exampleInputCalle">Calle</label>
            <input type="text" name="calle" class="form-control" id="exampleInputCalle" value="<?= $datos[0]->calle;?>">
        </div>
        <div class="form-group">
            <label for="exampleInputNumero">Número</label>
            <input type="text" name="num_calle" class="form-control" id="exampleInputNumero" value="<?= $datos[0]->num_calle;?>">
        </div>
        <div class="form-group">
            <label for="exampleInputNumero">Número de taquillas</label>
            <input type="text" class="form-control" id="exampleInputNumero" disabled value="<?= $num?>">
            <input type="text" name="id" hidden value="<?= $id?>">
        </div>

    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-warning">Editar oficina</button>
        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
    </div>

</form>

@endsection()