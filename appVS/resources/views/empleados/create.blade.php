@extends('layouts.admin')
@section('title','Crear Empleado')
@section('contenido')

<!-- este es el form -->

    <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/empleados" data-toggle="validator">
      <fieldset>
      {{ csrf_field()}}


      <div class="form-group">
          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card"></i></span>
            <div class="col-md-8">
                <input id="cedula" name="cedula" type="text" placeholder="Cedula: 000-0000000-0" class="form-control" pattern="{1,13}" required>
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
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary btn-lg ">Registrar</button>
        </div>
      </div>
      </fieldset>
    </form>
  </div>
</div>


        <script>
        var input = document.getElementById('cedula');

        input.oninvalid = function(event) {
            event.target.setCustomValidity('La cedula deberia de estar compuesta de 13 caracteres. ej. 000-0000000-0');
        }
        </script>




@endsection
