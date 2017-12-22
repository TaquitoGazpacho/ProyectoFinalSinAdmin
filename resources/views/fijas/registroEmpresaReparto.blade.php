<div id="modalEmpresa" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registrar Empresa</h4>
            </div>
            <form method="post" action="{{ route('registrarEmpresaReparto') }} ">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="nif">Nif</label>
                        <input type="text" class="form-control" id="nif" placeholder="Nif" name="nif">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>


                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-warning" value="Registrar"/>
                    <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>
