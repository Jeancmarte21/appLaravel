<div class="right_col" role="main">
  <!--<div class="">-->
    <div class="page-title">

      <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
    <form class="form-horizontal" method="post" action="/entradas">

      {{ csrf_field()}}

      <h3>   <button  class="btn btn-primary btn btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus-circle" aria-hidden="true"></i> Crear Entrada</button></h3>

          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Crear Entrada</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left input_mask">
<div class="form-group">

      <div class="form-group">
     <label class="col-xs-3 control-label">Fecha</label>
<div class="col-xs-5 selectContainer">
<input class="form-control" type="date"  id="example-date-input" name="fecha"  value="<?php echo date("Y-m-d");?>" required>
</div>
</div>

                <div class="form-group">
        <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="nombre" required>
                <option value="">Seleccione</option>
                @foreach($materiasprimas as $materiaprima)
                <option value="{{$materiaprima->idmateriaPrima}}">{{$materiaprima->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>





                   <div class="form-group">
        <label class="col-xs-3 control-label">Precio</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
                <input type="number" class="form-control" name="precio" min="0" data-number-to-fixed="2" data-number-stepfactor="100"  step="any" id="precio" />
                <span class="input-group-addon">$</span>
            </div>
        </div>
    </div>

                     <div class="form-group">
        <label class="col-xs-3 control-label">Cantidad entrante</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">

                <input type="number" class="form-control" min="0" data-number-to-fixed="2" data-number-stepfactor="100" name="cantidad" step="any"/>
                <span class="input-group-addon">lbs</span>

            </div>
        </div>
    </div>

                     <div class="form-group">
        <label class="col-xs-3 control-label">Suplidor</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="suplidor">
                <option value="">Seleccione</option>
                @foreach($suplidores as $suplidor)
                <option value="{{$suplidor->idsuplidor}}">{{$suplidor->nombre}}</option>
              @endforeach
            </select>
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
