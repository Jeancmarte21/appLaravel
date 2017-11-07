@extends('layouts.admin')
@section('title','Crear Cigarro')
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
           <input class="form-control" type="text"  id="cigarro-nombre" name="nombre">
        </div>
    </div>
                   	
                    <div class="form-group">
        <label class="col-xs-3 control-label">Tipo cigarro</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="tipo_cigarro">
                <option value="">Seleccione</option>
                <option value="Fumas">Fumas</option>
                <option value="Vitolas">Vitolas</option>
            </select>
        </div>
    </div>
                  
         
                
                    <div class="form-group">
        <label class="col-xs-3 control-label">Saborizante</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="saborizante">
            <option value="">Seleccione</option>
              @foreach($materiasprimas as $materiaprima)
                <option value="{{$materiaprima->idmateriaPrima}}">{{$materiaprima->nombre}}</option>
              @endforeach  
            </select>
        </div>
    </div>
                   
  
                   
                    </fieldset>
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