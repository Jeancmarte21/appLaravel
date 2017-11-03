@extends('layouts.admin')
@section('title','Editar Materia Prima')
@section('contenido')


     <!-- este es el form -->
 
    <div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/materiasPrimas">
      
      <fieldset>
      {{ csrf_field()}}



<div class="form-group"> 
                 <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-5 selectContainer">
           <input class="form-control" type="text"  id="example-date-input" name="nombre" value="{{$materiaPrima->nombre}}">
        </div>
    </div>
                
                    <div class="form-group">
        <label class="col-xs-3 control-label">Categoria</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="categoria" >
                <option value="" value="{{$materiaPrima->categoria}}">Seleccione</option>
                <option value="">Tabaco</option>
               <option value="">Saborizante</option>
               <option value="">Pega</option>
            </select>
        </div>
    </div> 

    <div class="form-group">
        <label class="col-xs-3 control-label">% Aumento de Peso Humedecido</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
               
                <input type="number" class="form-control" name="porcentaje_pesohumedo" min="0" data-number-to-fixed="2" data-number-stepfactor="100" value="{{$materiaPrima->porcentaje_pesohumedo}}" />
                <span class="input-group-addon">%</span>
        
            </div>
        </div>
        </div>
                  
             
                  
                   <div class="form-group">
        <label class="col-xs-3 control-label">Existencia minima</label>
        <div class="col-xs-5 inputGroupContainer">
            <div class="input-group">
               
                <input type="number" class="form-control" name="existencia_minima" min="0" data-number-to-fixed="2" data-number-stepfactor="100" value="{{$materiaPrima->existencia_minima}}" />
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
