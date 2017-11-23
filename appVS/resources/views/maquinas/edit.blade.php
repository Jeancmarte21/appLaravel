@extends('layouts.admin')
@section('title','Editar Maquina')
@section('contenido')

  <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="{{route('maquinas.update', [$maquina->idmaquina])}}">
      <fieldset>
      {{ csrf_field()}}
      <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                 <label class="col-xs-3 control-label">Nombre</label>
                 <div class="col-xs-5 selectContainer">
                 <input class="form-control" 
                        type="text"  
                        id="example-date-input" 
                        name="nombre" 
                        value="{{$maquina->nombre}}" required/>
        </div>
    </div>


                     <div class="form-group"> <!--Cambiar por radio Botton-->
        <label class="col-xs-3 control-label">Pago por:</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="pago">
            @if($maquina->produccion == 1) 
                <option value=1>Producción</option>
            @else
                <option value=0>Salario Fijo</option>
            @endif
                <option value="1">Producción</option>
               <option value="0">Salario Fijo</option>
            </select>
        </div>
    </div>


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
