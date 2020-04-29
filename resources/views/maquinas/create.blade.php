@extends('layouts.plantilla')

@section('encabezado')
    
@endsection

@section('contenido')
<div class="mt-2">
  <table id="tblMaquinas" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Modelo Pieza</th>
            <th>Nombre</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Cantidad Total</th>
            <th>Cantidad Actual</th>
            <th>Color Primario</th>
            <th>Color Secundario</th>
            <th>Color Terciario</th>
            <th>Fusion</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($maq as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->idPieza}}</td>
        <td>{{$item->nombreMaquina}}</td>
        <td>{{$item->fechaInicio}}</td>
        <td>{{$item->fechaFin}}</td>
        <td>{{$item->cantidadTotal}}</td>
        <td>{{$item->cantidadActual}}</td>
        <td>{{$item->colorPrimario}}</td>
        <td>{{$item->colorSecundario}}</td>
        <td>{{$item->colorTerciario}}</td>
        <td>{{$item->fusion}}</td>
        <td>{{$item->descripcion}}</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-success"><img src="/images/edit.png" width="20px" height="20px"></button>
            <button type="button" class="btn btn-danger"><img src="/images/delete.png" width="20px" height="20px"></button>
          </div>
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@section('content')
    <example-component>
      <span>Message: {{ msg }}</span>
    </example-component>
@endsection
    <form method="POST" action="/maquina">
        <div class="container">
            <div class="row">
              <div class="col-sm-1 mt-2">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" aria-describedby="idHelp" readonly>
                    <small id="idHelp" class="form-text text-muted">Id de Maquina</small>
                  </div>
              </div>
              <div class="col-sm-5 mt-2">
                <div class="form-group">
                    <label for="txtMaquina">Nombre de maquina</label>
                    <input type="text" class="form-control" id="txtMaquina" name="txtMaquina" aria-describedby="NombreHelp">
                    @csrf
                    <small id="NombreHelp" class="form-text text-muted">Nombre de la maquina.</small>
                  </div>
              </div>
              <div class="col-sm-5 mt-2">
                <div class="form-inline">
                    <label for="cmbPieza">Modelo Pieza</label>
                    <select id="cmbPieza" name="cmbPieza" class="form-control ml-2 col-4" aria-describedby="piezaHelp">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                    <input type="button" value="+" class="btn btn-success ml-2 col-1">
                  </div>
                  <small id="piezaHelp" class="form-text text-muted">Piezas a Seleccionar</small>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-4">
                <label for="txtCantidad">Cantidad a Realizar</label>
                <input type="text" class="form-control" id="txtCantidad" name="txtCantidad" aria-describedby="cantidadHelp">
                <small id="cantidadHelp" class="form-text text-muted">Cantidad de piezas a Realizar</small>
              </div>
              <div class="form-group col-sm-2 mt-2">
                <input type="button" value="Calcular Tiempo" class="btn btn-dark">
              </div>
                <div class="col-sm-2 mt-2">
                  <div class="form-group">
                    <label>Dias</label>
                    <label id="lblDias">0</label>
                    </div>
                </div>
                <div class="col-sm-2 mt-2">
                  <div class="form-group">
                    <label>Horas</label>
                    <label id="lblHoras">0</label>
                    </div>
                </div>
                <div class="col-sm-2 mt-2">
                  <div class="form-group">
                    <label>Minutos</label>
                    <label id="lblMinutos">0</label>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 mt-2">
                  
                </div>
                <div class="col-sm-4 mt-2">
                  <div class="form-group">
                      <label for="txtMaquina">Color #1</label>
                      <input type="text" class="form-control" id="txtColor1" name="txtColor1" aria-describedby="color1Help">
                      <small id="color1Help" class="form-text text-muted">Color de pieza #1</small>
                    </div>
                </div>
                <div class="col-sm-4 mt-2">
                  <div class="form-inline">
                      <label for="cmbPieza">Fusion</label>
                      <select id="cmbFusion" name="cmbFusion" class="form-control ml-2 col-4" aria-describedby="piezaHelp">
                          <option selected>Choose...</option>
                          <option>Poliéster</option>
                          <option>Nylon</option>
                      </select>
                    </div>
                    <small id="piezaHelp" class="form-text text-muted">Tipo de hilo</small>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 mt-2">
                  <div class="form-group">
                      <input type="submit" value="Agregar" class="btn btn-success">
                      <input type="button" value="Modificar" class="btn btn-primary">
                    </div>
                </div>
                <div class="col-sm-4 mt-2">
                  <div class="form-group">
                      <label for="txtMaquina">Color #2</label>
                      <input type="text" class="form-control" id="txtColor2" name="txtColor2" aria-describedby="color2Help">
                      <small id="color2Help" class="form-text text-muted">Color de pieza #2</small>
                      <br>
                      <label for="txtMaquina">Color #3</label>
                      <input type="text" class="form-control" id="txtColor3" name="txtColor3" aria-describedby="color3Help">
                      <small id="color3Help" class="form-text text-muted">Color de pieza #3</small>
                    </div>
                </div>
                <div class="col-sm-4 mt-2">
                  <div class="form-inline">
                      <label for="txtDescripcion">Descripcion</label>
                      <textarea name="txtDescripcion" id="txtDescripcion" cols="40" rows="5" aria-describedby="DescripcionHelp"></textarea>
                    </div>
                    <small id="DescripcionHelp" class="form-text text-muted">Descripcion de maquina o pedido</small>
                </div>
              </div>
          </div>
    </form>
    <script>
      $(document).ready( function () {
        $('#tblMaquinas').DataTable( {
    language: {
        processing:     "Procesando...",
        search:         "Buscar:",
        lengthMenu:    "Mostrar _MENU_ registros",
        info:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        infoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
        infoFiltered:   "(filtrado de un total de _MAX_ registros)",
        infoPostFix:    "",
        loadingRecords: "Cargando...",
        zeroRecords:    "No se encontraron resultados",
        emptyTable:      "Ningún dato disponible en esta tabla =(",
        paginate: {
            first:      "Primero",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Último",
        },
        aria: {
            sortAscending:  ": Activar para ordenar la columna de manera ascendente",
            sortDescending: ": Activar para ordenar la columna de manera descendente"
        }
    }
} );
        
      } );
          </script>
@endsection