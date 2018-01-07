<div id="editarUsuario" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registrar Empresa</h4>
            </div>
            <form method="post" action="{{ route('admin.editarUsuario') }} ">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="userId">ID</label>
                        <input type="text" class="form-control" id="userId" placeholder="Id" name="id" readonly>
                    </div>
                    <div class="form-group">
                        <label for="userNombre">Nombre</label>
                        <input type="text" class="form-control" id="userNombre" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="userApellido">Apellido</label>
                        <input type="text" class="form-control" id="userApellido" placeholder="Apellido" name="apellido">
                    </div>
                    <div class="form-group">
                        <label for="userEmail">Email</label>
                        <input type="email" class="form-control" id="userEmail" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="userTelefono">Telefono</label>
                        <input type="number" class="form-control" id="userTelefono" placeholder="Telefono" name="telefono" value="0">
                    </div>
                    <div class="form-group">
                        <label for="userSex">Sex:</label><br/>
                        <label><input type="radio" name="userSex" value="Masculino" id="user_masculino">Masculino</label><br/>
                        <label><input type="radio" name="userSex" value="Femenino" id="user_femenino">Femenino</label><br/>
                        <label><input type="radio" name="userSex" value="Otro" id="user_otro" checked>Otro</label>
                    </div>
                    <div class="form-group">
                        <label for="suscripcion">Select list (select one):</label>
                        <select class="form-control" id="userSuscripcion" name="suscripcion">
                            <option value="1">Gratis</option>
                            <option value="2">Básico</option>
                            <option value="3">Premium</option>
                            <option value="4">Empresa</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-warning" value="Modificar"/>
                    <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>

