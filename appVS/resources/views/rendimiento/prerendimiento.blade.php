<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<div class="right_col" role="main">
  <!--<div class="">-->
    <div class="page-title">

      <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">


<form class="form-horizontal" method="get" action="/rendimiento">
{{ csrf_field()}}

<h3>   <button  class="btn btn-primary btn btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Seleccionar Rango de Fechas</button></h3>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Seleccionar Rango de Fechas</h4>
          </div>
          <div class="modal-body">
              <form class="form-horizontal form-label-left input_mask">


<div class="form-group">


<div class="form-group">
    	<div class="col-xs-10">
        <label class="col-xs-3 control-label">Desde</label>

				<div class="col-xs-8 selectContainer">
					<input class="form-control" type="date"  id="example-date-input" name="fecha_desde" required>
				</div>
		</div>
  </div>

  <div class="form-group">
      	<div class="col-xs-10">
          <label class="col-xs-3 control-label">Hasta</label>
				<div class="col-xs-8 selectContainer">
					<input class="form-control" type="date"  id="example-date-input" name="fecha_hasta" required>

			</div>
		</div>
</div>


<div class="modal-footer">
     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

     <button type="submit" class="btn btn-primary">Actualizar</button>

 </form>
</div>

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
</div>
