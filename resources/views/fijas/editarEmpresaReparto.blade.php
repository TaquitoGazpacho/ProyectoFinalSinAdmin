<div id="modalEditarEmpresa" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Empresa</h4>
            </div>
            <form id="editarEmpresaReparto" method="POST" action="{{ route('editarEmpresa.actualizarEmpresaReparto') }} ">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="InputId">Id</label>
                        <input type="text" name="id" class="form-control" id="inputId" value="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="InputNombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="inputNombre" value="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Email</label>
                        <input type="text" name="email" class="form-control" id="inputEmail" value="">
                    </div>
                    <div class="form-group">
                        <label for="InputTelefono">Teléfono</label>
                        <input type="text" name="telefono" class="form-control" id="inputTelefono" value="">
                    </div>
                    <div class="form-group">
                        <label for="InputNif">Nif</label>
                        <input type="text" name="nif" class="form-control" id="inputNif" value="">
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-warning" value="Actualizar"/>
                    <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
                </div>

            </form>
        </div>

    </div>
</div>


