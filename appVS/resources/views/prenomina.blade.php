@extends('layouts.admin')
@section('title','Nomina')
@section('contenido')

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	</div>
</div>


		<form class="form-horizontal" method="post" action="/nomina">
{{ csrf_field()}}
	<div class="container">
    	<div class='col-md-5'>
      		<div class="form-group">
     			<label class="col-xs-3 control-label">Fecha desde:</label>
				<div class="col-xs-6 selectContainer">
					<input class="form-control" type="date"  id="example-date-input" name="fecha_desde" required>
				</div>
			</div>
		</div>

		<div class='col-md-5'>
			<div class="form-group">
				<label class="col-xs-3 control-label">Fecha hasta:</label>
				<div class="col-xs-6 selectContainer">
					<input class="form-control" type="date"  id="example-date-input" name="fecha_hasta" required>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
        <div class="col-xs-11 text-center">
          <button type="submit" class="btn btn-primary btn-lg ">Actualizar</button>
        </div>
    </div>
</form>



@endsection
