<div class="right_col" role="main">
  <!--<div class="">-->
    <div class="page-title">

      <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

    <form class="form-horizontal" method="post" action="/produccionesmaquinas">

      {{ csrf_field()}}


      <h3>   <button  class="btn btn-primary btn btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-user-plus" aria-hidden="true"></i> Crear Producción</button></h3>

          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Crear Producción</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left input_mask">
    <div class="form-group">


                   <div class="form-group">
        <label for="example-datetime-local-input" class="col-xs-3 control-label">Fecha & hora</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="datetime-local" value="T13:45:00" id="fecha" name="fecha" required>
        </div>
    </div>





                              <div class="form-group">
        <label class="col-xs-3 control-label">Maquina</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="maquina" required>
                <option value="">Seleccione</option>
                @foreach($maquinas as $maquina)
                <option value="{{$maquina->idmaquina}}">{{$maquina->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>

                <div class="form-group">
        <label class="col-xs-3 control-label">Cigarro</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="cigarro" required>
                <option value="">Seleccione</option>
                @foreach($cigarros as $cigarro)
                <option value="{{$cigarro->idcigarro}}">{{$cigarro->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Configuración</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="configuracion" required>
                <option value="">Seleccione</option>
                @foreach($configuraciones as $configuracion)
                <option value="{{$configuracion->idconfiguracion}}">{{$configuracion->nombre}}</option>
              @endforeach
              </select>
        </div>
    </div>



         <div class="form-group">
        <label class="col-xs-3 control-label">Cantidad</label>
        <div class="col-xs-5 selectContainer">
        <input class="form-control" type="number" value="0" min="0" step="0.1" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="cantidad" name="cantidad">
       </div>
            </div>

            <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                 <button type="submit" class="btn btn-primary">Registrar</button>
                 <div class="form-group">

               </div>
             </form>
        </div>
        </div>
        </div>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>


        </div>
        </div>
        </div>
        </div>
