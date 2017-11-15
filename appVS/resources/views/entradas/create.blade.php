@extends('layouts.admin')
@section('title','Crear Entrada')
@section('contenido')

 <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/entradas">
      <fieldset>
      {{ csrf_field()}}

      <div class="form-group">
     <label class="col-xs-3 control-label">Fecha</label>
<div class="col-xs-5 selectContainer">
<input class="form-control" type="date"  id="example-date-input" name="fecha" required>
</div>
</div>

                <div class="form-group">
        <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="nombre" required>
                <option value="">Seleccione</option>
                @foreach($materiasprimas as $materiaprima)
                <option value="{{$materiaprima->idmateriaPrima}}">{{$materiaprima->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>





                   <div class="form-group">
        <label class="col-xs-3 control-label">Precio</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
                <input type="number" class="form-control" name="precio" min="0" data-number-to-fixed="2" data-number-stepfactor="100"  step="any" id="precio" />
                <span class="input-group-addon">$</span>
            </div>
        </div>
    </div>

                     <div class="form-group">
        <label class="col-xs-3 control-label">Cantidad entrante</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">

                <input type="number" class="form-control" min="0" data-number-to-fixed="2" data-number-stepfactor="100" name="cantidad" step="any"/>
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
                <option value="{{$suplidor->id}}">{{$suplidor->nombre}}</option>
              @endforeach
            </select>
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
