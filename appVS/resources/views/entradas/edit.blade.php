 @extends('layouts.admin')
@section('title','Editar Salida')
@section('contenido')


    <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="{{route('empleados.update', [$empleado->idempleado])}}">
      
      <fieldset>
      {{ csrf_field()}}
      <input type="hidden" name="_method" value="put">


     <div class="form-group">
        <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="nombre">
                <option value="">Seleccione</option>
                @foreach($materiasprimas as $materiaprima)
                <option value="{{$materiaprima->idmateriaPrima}}">{{$materiaprima->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>
                 
                 
                  <div class="form-group"> 
                 <label class="col-xs-3 control-label">Fecha</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="date"  id="example-date-input" name="fecha">
        </div>
    </div>
                  
          
                  
                  
                   <div class="form-group">
        <label class="col-xs-3 control-label">Precio</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
                <input type="number" class="form-control" name="precio" />
                <span class="input-group-addon">$</span>
            </div>
        </div>
    </div>
                  
                     <div class="form-group">
        <label class="col-xs-3 control-label">Cantidad entrante</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
               
                <input type="number" class="form-control" min="0" data-number-to-fixed="2" data-number-stepfactor="100" name="cantidad" />
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