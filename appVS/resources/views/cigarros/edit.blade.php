@extends('layouts.admin')
@section('title','Editar Cigarro')
@section('contenido')

<!-- este es el form -->
 
    <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/cigarros">
      <fieldset>
      {{ csrf_field()}}	


 <div class="form-group">
        <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="nombre">
                <option value="">Seleccione</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
                <option value="">...</option>
            </select>
        </div>
    </div>
                   	
                    <div class="form-group">
        <label class="col-xs-3 control-label">Tipo cigarro</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="tipo_cigarro">
                <option value="">Seleccione</option>
                <option value="">Fumas</option>
                <option value="">Vitolas</option>
            </select>
        </div>
    </div>
                  
         
                
                    <div class="form-group">
        <label class="col-xs-3 control-label">Saborizante</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="saborizante">
                <option >Seleccione</option>
                 <option value="">Free Aromatic</option>
                  <option value="">Cherry</option>
                <option value="">Grape</option>
                 <option value="">Honey Bourbon</option>
                <option value="">Honey</option>
                <option value="">Honey Berry</option>
                 <option value="">Natural</option>
                
                
            </select>
        </div>
    </div>
                   
  





            </fieldset>
                     <div class="form-group">
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary btn-lg ">Actualizar</button>
        </div>
      </div>
      </fieldset>
    </form>
  </div>
</div>


      @endsection