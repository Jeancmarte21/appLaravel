@extends('layouts.admin')
@section('title','Crear Configuración')
@section('contenido')

<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/empleados">
      <fieldset>
      {{ csrf_field()}}
                   	
                   	   <form class="navbar-form" role="search">
      <div class=form-group>
           <label class="col-xs-3 control-label">Cigarro</label>
          <div class="col-xs-5 selectContainer">
        <input type="text" class="form-control" placeholder="" name="cigarro">
					  </div>
					     <button type="submit" class="btn btn-default">Buscar</button>
					  </div>
     
    </form>
       
               
                   <div class="form-group">
        <label class="col-xs-3 control-label">Capa</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="capa">
                <option value="">Seleccione</option>
                <option value="">Pennsylvania</option>
                      <option value="">Connecticut Banda Sana</option>
				      <option value="">Banda HVA</option>
				            <option value="">Sumatra Banda</option>
			</select>
        </div>
    </div>
                   <div class="form-group">
        <label class="col-xs-3 control-label">Capote</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="capote">
                <option value="">Seleccione</option>
                <option value="">Pennsylvania</option>
                      <option value="">Connecticut Banda Sana</option>
				      <option value="">Banda HVA</option>
				            <option value="">Sumatra Banda</option>
			</select>
        </div>
    </div>
                  
                        <div class="form-group">
        <label class="col-xs-3 control-label">Fecha</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="date" id="example-date-input" name="fecha">
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

@endsection