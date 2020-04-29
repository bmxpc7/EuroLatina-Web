@extends('layouts.plantilla')
@section('encabezado')
    
@endsection
@section('contenido')
<div class="mt-2">
  <table id="tblMaquinas" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Contraseña</th>
            <th>Turno</th>
            <th>Tipo</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($pieza as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->usuario}}</td>
        <td>{{$item->nombre}}</td>
        <td>{{$item->apellido}}</td>
        <td>{{$item->password}}</td>
        @if ($item->turno===1)
        <td>Matutino</td>
        @elseif($item->turno===2)
        <td>Vespertino</td>
        @else
        <td>Nocturno</td>
        @endif
        @if ($item->tipo===1)
        <td>Administrador</td>
        @endif
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
    <form method="POST" action="/users">
        <div class="container">
            <div class="row">
              <div class="col-sm-6 mt-2">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" aria-describedby="idHelp" readonly>
                    <small id="idHelp" class="form-text text-muted">Id de Usuario</small>
                  </div>
              </div>
              <div class="col-sm-6 mt-2">
                <div class="form-group">
                    <label for="txtPieza">Usuario</label>
                    <input type="text" class="form-control" id="txtUser" name="txtUser" aria-describedby="UserHelp">
                    @csrf
                    <small id="UserHelp" class="form-text text-muted">Nombre de Usuario en sistema</small>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mt-2">
                <div class="form-group">
                    <label for="id">Nombre</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" aria-describedby="nombreHelp">
                    <small id="nombreHelp" class="form-text text-muted">Nombre del trabajador</small>
                  </div>
              </div>
              <div class="col-sm-6 mt-2">
                <div class="form-group">
                    <label for="txtPieza">Apellido</label>
                    <input type="text" class="form-control" id="txtApellido" name="txtApellido" aria-describedby="ApellidoHelp">
                    <small id="ApellidoHelp" class="form-text text-muted">Apellido del trabajador</small>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 mt-2">
                <div class="form-group">
                    <label for="txtContra">Contraseña</label>
                    <input type="password" class="form-control" id="txtContra" name="txtContra" aria-describedby="contraHelp">
                    <small id="contraHelp" class="form-text text-muted">Contraseña de Usuario</small>
                  </div>
              </div>
              <div class="col-sm-6 mt-2">
                <div class="form-inline">
                    <label for="cmbTurno">Turno</label>
                    <select id="cmbTurno" name="cmbTurno" class="form-control ml-2 col-4" aria-describedby="turnoHelp">
                        <option selected>Choose...</option>
                        <option>Matutino</option>
                        <option>Vespertino</option>
                        <option>Nocturno</option>
                    </select>
                  </div>
                  <small id="turnoHelp" class="form-text text-muted">Turno del Trabajador</small>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 mt-2">
                <div class="form-group">
                    <input type="submit" value="Agregar" class="btn btn-success">
                    <input type="button" value="Modificar" class="btn btn-primary">
                  </div>
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