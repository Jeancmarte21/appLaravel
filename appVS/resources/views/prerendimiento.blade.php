


{!! Form::open(array('url'=>'rendimiento','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
{{ csrf_field()}}


<div class="form-group">

    <div class="row">


    	<div class='col-xs-10  '>

     			<label class="col-xs-7 control-label">Fecha desde:</label>
				<div class="col-xs-8 selectContainer">
					<input class="form-control" type="date"  id="example-date-input" name="fecha_desde" required>
				</div>

		</div>

		<div class='col-xs-10'>

				<label class="col-xs-7 control-label">Fecha hasta:</label>
				<div class="col-xs-8 selectContainer">
					<input class="form-control" type="date"  id="example-date-input" name="fecha_hasta" required>

			</div>
		</div>


    <div class="form-group">
          <div class="col-xs-11 text-center">
            <button type="submit" class="btn btn-primary btn-xs ">Actualizar</button>
          </div>
      </div>

    </div>


    </div>

</form>
