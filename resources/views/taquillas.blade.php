@extends('fijas.master')

@section('section')
    <?php
        $oficina = new \App\Models\Oficina();
        $oficina->getOficina($ofi_id);
    ?>
    <div class="container">
        {{--@if (isset($taquillas))--}}
        <h3>Oficina {{ $oficina->id.": ".$oficina->calle.", ".$oficina->num_calle." (".$oficina->ciudad.")" }}</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero Taquilla</th>
                    <th>Tamaño</th>
                    <th>Ocupada</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taquillas as $taquilla)
                    <tr>
                        <td>{{$taquilla->id}}</td>
                        <td>{{$taquilla->numero_taquilla}}</td>
                        <td>{{$taquilla->tamanio}}</td>
                        <td>
                            @if(!$taquilla->ocupada)
                                No
                            @else
                                Si
                            @endif
                        </td>
                        {{--<td>{{$taquilla->estado}}</td>--}}
                        <td>
                            <select onchange="estadoTaquilla(event, {{$taquilla->id}})">
                                @if (strtolower($taquilla->estado)=='funcionando')
                                    <option name="Funcionando">Funcionando</option>
                                    <option name="Estropeada">Estropeada</option>
                                @elseif(strtolower($taquilla->estado)=='estropeada')
                                    <option name="Estropeada">Estropeada</option>
                                    <option name="Funcionando">Funcionando</option>
                                @endif
                            </select>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('admin.home')}}" class="btn btn-info">Volver Atras</a>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#AddTaquilla">Añadir Taquillas</button>
        <br/><br/>

        <!-- Modal -->
        <div id="AddTaquilla" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <form action="{{route('crearTaquillas')}}" method="post">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="taquillaG">Taquillas grandes:</label>
                                    <input type="number" class="form-control" value="0" name="taquillaG" id="taquillaG">
                                </div>
                                <div class="form-group">
                                    <label for="taquillaM">Taquillas medianas:</label>
                                    <input type="number" class="form-control" value="0" name="taquillaM" id="taquillaM">
                                </div>
                                <div class="form-group">
                                    <label for="taquillaS">Taquillas pequeñas:</label>
                                    <input type="number" class="form-control" value="0" name="taquillaS" id="taquillaS">
                                </div>
                                <div class="form-group">
                                    <label for="oficina_id">Oficina:</label>
                                    <input type="text" class="form-control" name="oficina_id" id="oficina_id" value="{{$oficina->id}}" readonly>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-warning" value="Submit" />
                        </div>
                    </form>
                </div>

            </div>
        </div>
    {{--@endif--}}
    </div>
@endsection