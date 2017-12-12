
  <div class="right_col" role="main">
    <!--<div class="">-->
      <div class="page-title">

        <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">

            <form class="form-horizontal" method="post" action="/empleados" data-toggle="validator">

              {{ csrf_field()}}

        <h3>   <button  class="btn btn-primary btn btn-xs" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-user-plus" aria-hidden="true"></i> Crear Empleado</button></h3>

            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Crear Empleado</h4>
                  </div>
                  <div class="modal-body">
                      <form class="form-horizontal form-label-left input_mask">


                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card"></i></span>
                                  <div class="col-md-8">
                                      <input id="cedula" name="cedula" type="text" placeholder="Cedula" class="form-control" pattern="{1,13}"  data-mask="000-0000000-0" required>
                                  </div>
                              </div>


                            <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                              <div class="col-md-8">
                              <input id="empleado-nombre" name="nombre" type="text" placeholder="Nombres" class="form-control" required>
                              </div>
                            </div>

                            <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                              <div class="col-md-8">
                                <input id="empleado-apellido" name="apellidos" type="text" placeholder="Apellidos" class="form-control" required>
                              </div>
                            </div>

                              <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                            <input id="telefono" name="telefono" type="tel" placeholder="Telefono" class="form-control" data-mask="000-000-0000">
                            </div>
                            </div>

                            <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar bigicon"></i></span>
                              <div class="col-md-8">
                                <input placeholder="Fecha nacimiento" class="form-control" type="date"  onfocus= '(this.type="date")' id="empleado-fechanac" name="fecha_nacimiento">
                              </div>
                            </div>


                            <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-globe bigicon"></i></span>
                              <div class="col-md-8">
                                <input id="empleado-direccion" name="direccion" type="text" placeholder="Direccion" class="form-control">
                              </div>
                            </div>

                            <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-money" aria-hidden="true"></i></span>
                              <div class="col-md-8">
                                <input id="salario_dia" name="salario_dia" type="number" placeholder="Salario por día" class="form-control value="0" min="0" step="0.1">
                              </div>
                            </div>

                            <div class="form-group">
                              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-money" aria-hidden="true"></i></span>
                              <div class="col-md-8">
                                <input id="salario_hora" name="salario_hora" type="number" placeholder="Salario por hora" class="form-control value="0" min="0" step="0.1">
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
