@extends('layouts.admin')
@section('title','Editar Salida')
@section('contenido')


    <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="{{route('salidas.update', [$salida->idsalida])}}">
      
      <fieldset>
      {{ csrf_field()}}
      <input type="hidden" name="_method" value="put">

      <div class="form-group">
     <label class="col-xs-3 control-label">Fecha</label>
<div class="col-xs-5 selectContainer">
<input class="form-control" type="date"  id="fecha" name="fecha" value="{{$salida->fecha}}">
</div>
</div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="nombre">
                <<option value="{{$salida->materiaprima_id}}">{{$salida->materiasprimas->nombre}}</option>
                @foreach($materiasprimas as $materiaprima)
                <option value="{{$materiaprima->idmateriaPrima}}">{{$materiaprima->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>
              
          
                  
                     <div class="form-group">
        <label class="col-xs-3 control-label">Cantidad</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
               
                <input type="number" class="form-control" min="0" data-number-to-fixed="2" data-number-stepfactor="100" name="cantidad" value="{{$salida->cantidad}}"/>
                <span class="input-group-addon">lbs</span>
				
            </div>
        </div>
    </div>
            



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