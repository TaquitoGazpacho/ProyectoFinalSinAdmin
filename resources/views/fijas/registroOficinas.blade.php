<div id="modalOficina" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Crear Oficina</h4>
            </div>
            <form id="registroOficina" method="POST" action="{{ route('registrarOficina') }} ">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputCiudad">Ciudad</label>
                        <input type="text" name="ciudad" class="form-control" id="exampleInputCiudad" placeholder="Ciudad">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCalle">Calle</label>
                        <input type="text" name="calle" class="form-control" id="exampleInputCalle" placeholder="Calle">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNumero">Número</label>
                        <input type="text" name="num_calle" class="form-control" id="exampleInputNumero" placeholder="Numero">
                    </div>

                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-warning" value="Nueva oficina"/>
                    <button type="button" onclick="sw()" class="btn btn-error" data-dismiss="modal">Close</button>
                </div>

            </form>

        </div>

    </div>
</div>
