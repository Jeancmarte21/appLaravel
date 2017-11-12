@extends('layouts.admin')
@section('title','Crear Configuración')
@section('contenido')

<div class="row">
  <div class="col-md-12">
    <form class="form-horizontal" method="post" action="/configuraciones">
      <fieldset>
      {{ csrf_field()}}

      <div class="form-group">
        <label class="col-xs-3 control-label">Nombre</label>
        <div class="col-xs-6 selectContainer">
           <input class="form-control" type="text"  id="configuracion-nombre" name="nombre">
        </div>
    </div>

                   	   <div class="form-group">
        <label class="col-xs-3 control-label">Cigarro</label>
        <div class="col-xs-6 selectContainer">
            <select class="form-control" name="cigarro">
            <option value="">Seleccione</option>
              @foreach($cigarros as $cigarro)
                <option value="{{$cigarro->idcigarro}}">{{$cigarro->nombre}}</option>
              @endforeach
            </select>
        </div>
    </div>


    <div class="form-group">
<label class="col-xs-3 control-label">Capa</label>
<div class="col-xs-3 selectContainer">
<select class="form-control" name="capa" id="capa">
 <option value="">Seleccione</option>
 @foreach($materiasprimas as $materiaprima)
 <option value="{{$materiaprima->idmateriaPrima}}">{{$materiaprima->nombre}}</option>
@endforeach
</select>
</div>
<div class="col-xs-3 inputGroupContainer">
<div class="input-group">

   <input type="number" class="form-control" min="0" data-number-to-fixed="2" data-number-stepfactor="100" name="cantidad" step="0.1"/>
   <span class="input-group-addon">lbs</span>

</div>
</div>
</div>
                   <div class="form-group">
        <label class="col-xs-3 control-label">Capote</label>
        <div class="col-xs-3 selectContainer">
            <select class="form-control" name="capote" id="capote">
                <option value="">Seleccione</option>
                @foreach($materiasprimas as $materiaprima)
                <option value="{{$materiaprima->idmateriaPrima}}">{{$materiaprima->nombre}}</option>
              @endforeach
			</select>
        </div>
        <div class="col-xs-3 inputGroupContainer">
              <div class="input-group">

                  <input type="number" class="form-control" min="0" data-number-to-fixed="2" data-number-stepfactor="100" name="cantidad" step="0.1"/>
                  <span class="input-group-addon">lbs</span>

              </div>
          </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Relleno</label>
        <div class="col-xs-3 selectContainer">
            <select class="form-control" name="capote" id="capote">
                <option value="3">Picadura</option>
      </select>

        </div>
        <div class="col-xs-3 inputGroupContainer">
              <div class="input-group">

                  <input type="number" class="form-control" min="0" data-number-to-fixed="2" data-number-stepfactor="100" name="cantidad" step="0.1"/>
                  <span class="input-group-addon">lbs</span>

              </div>
          </div>
    </div>

                        <div class="form-group">
        <label class="col-xs-3 control-label">Fecha</label>
        <div class="col-xs-6 selectContainer">
           <input class="form-control" type="date" id="fecha" name="fecha">
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



<script type="text/javascript">
function comparar_textos() {
	var capa = document.forms[0].elements[0].value;
	var capote = document.forms[0].elements[1].value;
	var tam_capa = capa.length;
	var tam_capote = capote.length;
	if (tam_capa != tam_capote) {
		alert('los datos introducidos no son coincidentes');
	} else {
		for (n = 0; n < tam_capa; n++) {
			if (capa.charAt(n) != capote.charAt(n)) {
				alert('las cadenas introducidas no son coincidentes');
			}
		}
	}
}

</script>


@endsection
