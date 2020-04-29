@extends('../layouts/plantilla')

@section('encabezado')
    
@endsection

@section('contenido')
    <form method="POST">
        <div class="container">
            <div class="row">
              <div class="col-sm-1 mt-2">
                <div class="form-group">
                    <label for="id">Id</label>
                    <input type="text" class="form-control" id="id" aria-describedby="idSmall" readonly>
                    <small id="idHelp" class="form-text text-muted">Id de Maquina</small>
                  </div>
              </div>
              <div class="col-sm-5 mt-2">
                <div class="form-group">
                    <label for="txtMaquina">Nombre de maquina</label>
                    <input type="text" class="form-control" id="txtMaquina" aria-describedby="NombreHelp">
                    <small id="NombreHelp" class="form-text text-muted">Nombre de la maquina.</small>
                  </div>
              </div>
              <div class="col-sm-5 mt-2">
                <div class="form-inline">
                    <label for="cmbPieza">Modelo Pieza</label>
                    <select id="cmbPieza" class="form-control ml-2 col-4" aria-describedby="piezaHelp">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                    <input type="button" value="+" class="btn btn-success ml-2 col-1">
                  </div>
                  <small id="piezaHelp" class="form-text text-muted">Piezas a Seleccionar</small>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mt-2">
                  <div class="form-group">
                    <label for="start">Fecha Inicio:</label>
                    <input type="date" id="start" name="trip-start"
                           value="2020-04-05"
                           min="2020-04-05" max="2020-12-31">
                    </div>
                </div>
                <div class="col-sm-6 mt-2">
                  <div class="form-group">
                    <label for="start">Fecha Fin:</label>
                    <input type="date" id="start" name="trip-start"
                            value="2020-04-05"
                            min="2020-04-05" max="2020-12-31">
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 mt-2">
                  <div class="form-group">
                      <label for="txtCantidad">Cantidad a Realizar</label>
                      <input type="text" class="form-control" id="txtCantidad" aria-describedby="idSmall">
                      <small id="idHelp" class="form-text text-muted">Cantidad de piezas a Realizar</small>
                    </div>
                </div>
                <div class="col-sm-4 mt-2">
                  <div class="form-group">
                      <label for="txtMaquina">Color #1</label>
                      <input type="text" class="form-control" id="txtMaquina" aria-describedby="NombreHelp">
                      <small id="NombreHelp" class="form-text text-muted">Color de pieza #1</small>
                    </div>
                </div>
                <div class="col-sm-4 mt-2">
                  <div class="form-inline">
                      <label for="cmbPieza">Fusion</label>
                      <select id="cmbPieza" class="form-control ml-2 col-4" aria-describedby="piezaHelp">
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
                      <input type="button" value="Agregar" class="btn btn-success">
                      <input type="button" value="Modificar" class="btn btn-primary">
                    </div>
                </div>
                <div class="col-sm-4 mt-2">
                  <div class="form-group">
                      <label for="txtMaquina">Color #2</label>
                      <input type="text" class="form-control" id="txtMaquina" aria-describedby="NombreHelp">
                      <small id="NombreHelp" class="form-text text-muted">Color de pieza #2</small>
                      <br>
                      <label for="txtMaquina">Color #3</label>
                      <input type="text" class="form-control" id="txtMaquina" aria-describedby="NombreHelp">
                      <small id="NombreHelp" class="form-text text-muted">Color de pieza #3</small>
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
@endsection

@section('pie')
    
@endsection