@extends('../layouts/plantilla')

@section('encabezado')
    
@endsection

@section('contenido')
<div class="mt-2">
  <table id="tblMaquinas" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($pieza as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->nombre}}</td>
        <td>{{$item->descripcion}}</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-success" id="btnEditar"><img src="/images/edit.png" width="20px" height="20px"></button>
            <button type="button" class="btn btn-danger" id="btnEliminar"><img src="/images/delete.png" width="20px" height="20px"></button>
          </div>
        </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
    <form method="POST" action="/pieza">
        <div class="container">
            <div class="row">
              <div class="col-sm-1 mt-2">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" name="id" aria-describedby="idHelp" readonly>
                    <small id="idHelp" class="form-text text-muted">Id de Pieza</small>
                  </div>
              </div>
              <div class="col-sm-5 mt-2">
                <div class="form-group">
                    <label for="txtPieza">Nombre de Pieza</label>
                    <input type="text" class="form-control" id="txtPieza" name="txtPieza" aria-describedby="NombreHelp">
                    @csrf
                    <small id="NombreHelp" class="form-text text-muted">Nombre de la pieza.</small>
                  </div>
              </div>
              <div class="col-sm-4 mt-2">
                <div class="form-inline">
                    <label for="txtDescripcion">Descripcion</label>
                    <textarea name="txtDescripcion" id="txtDescripcion" cols="40" rows="5" aria-describedby="DescripcionHelp"></textarea>
                  </div>
                  <small id="DescripcionHelp" class="form-text text-muted">Descripcion de Pieza</small>
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
        var table = $('#tblMaquinas').DataTable( {
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
$('#tblMaquinas tbody').on('click', 'tr td button', function () {
  var data = table.row($(this).parents("tr")).data();
  if(this.id == "btnEditar"){
    alert( 'Editar '+data[0]+'\'s row' );
  }else{
    alert( 'Eliminar '+data[0]+'\'s row' );
  }
    });
});
      
          </script>
@endsection