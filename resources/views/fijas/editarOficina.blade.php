@extends('fijas.master')

@section('section')

<div class="container">
    <form id="editarOficina" method="POST" action="{{ route('editarOficina.actualizarOficina') }}">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
                <label for="id">Id</label>
                <input type="text" name="id" class="form-control" id="id" value="<?= $datosOficina[0]->id;?>" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputCiudad">Ciudad</label>
                <input type="text" name="ciudad" class="form-control" id="exampleInputCiudad" value="<?= $datosOficina[0]->ciudad;?>" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputCalle">Calle</label>
                <input type="text" name="calle" class="form-control" id="exampleInputCalle" value="<?= $datosOficina[0]->calle;?>">
            </div>
            <div class="form-group">
                <label for="exampleInputNumero">Número</label>
                <input type="text" name="num_calle" class="form-control" id="exampleInputNumero" value="<?= $datosOficina[0]->num_calle;?>">
            </div>

        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-warning" value="Editar Oficina" />
            <a href="{{route('admin.home')}}" class="btn btn-danger">Close</a>
        </div>

    </form>
</div>
@endsection()