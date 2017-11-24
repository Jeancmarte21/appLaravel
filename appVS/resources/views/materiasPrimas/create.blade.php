@extends('layouts.admin')
@section('title','Crear Materia Prima')
@section('contenido')

   <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/materiasPrimas">
      <fieldset>
      {{ csrf_field()}}
                    <div class="form-group">
                 <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="text"  id="example-date-input" name="nombre">
        </div>
    </div>

                    <div class="form-group">
        <label class="col-xs-3 control-label">Categoria</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="categoria" name="categoria" required>
                <option value="">Seleccione</option>
                <option value="Tabaco">Tabaco</option>
               <option value="Saborizante">Saborizante</option>
               <option value="Pega">Pega</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">% Aumento de Peso Humedecido</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">

                <input type="number" class="form-control" name="porcentaje_pesohumedo" value="0" min="0" data-number-to-fixed="2" data-number-stepfactor="100" step="0.1"/>
                <span class="input-group-addon">%</span>

            </div>
        </div>
        </div>



                   <div class="form-group">
        <label class="col-xs-3 control-label">Existencia minima</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">

                <input type="number" class="form-control" name="existencia_minima" min="0" data-number-to-fixed="2" data-number-stepfactor="100" step="0.1"/>
                <span class="input-group-addon">lbs</span>

            </div>
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
