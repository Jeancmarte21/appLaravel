
  <div class="right_col" role="main">
    <!--<div class="">-->
      <div class="page-title">

        <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">

    <form class="form-horizontal" method="post" action="/maquinas">
      {{ csrf_field()}}

      <h3>   <button  class="btn btn-primary btn btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-user-plus" aria-hidden="true"></i> Crear Maquina</button></h3>

          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Crear Maquina</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left input_mask">

                    <div class="form-group">
                 <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="text"  id="example-date-input" name="nombre" required>
        </div>
    </div>


                     <div class="form-group"> <!--Cambiar por radio Botton-->
        <label class="col-xs-3 control-label">Pago por:</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="pago">
                <option value="">Seleccione</option>
                <option value=1>Producción</option>
               <option value=0>Salario Fijo</option>
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
