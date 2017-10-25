<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;

use appVS\Http\Request;
use appVS\Empleado;
use Illuminate\Support\Facades\Redirect;
use appVS\Http\Request\EmpleadoFromRequest;
use DB;


class EmpleadoController extends Controller
{
     public function__construct(){

   }
   public function index(Request $request){

   	if($request)
   	{
   		$query=trim($request->get('searchText'));//filtro de busqueda

   		$empleados=DB::table('empleado')->where('nombre','LIKE','%'.$query.'%')->orderBy('idempleado','desc')
   		    ->paginate(7);
   		    return view('gestionEmpleados.empleado.index',["empleados"=>$empleados,"searchText"=>$query]);
   	}

   }

public function create(){ // crear nuevo empleado

	return view("gestionEmpleados.empleado.create");

}

public function store(EmpleadoFromRequest $request){

	$empleado=new Empleado;
	$empleado->cedula=$request->get('cedula');
	$empleado->nombre=$request->get('nombre');
	$empleado->apellidos=$request->get('apellidos');
	$empleado->fecha_naci=$request->get('fecha_naci');
	$empleado->direccion=$request->get('direccion');
	$empleado->save();
	return Redirect::to(gestionEmpleados/empleado);
	

}

public function show($id){

	return view("gestionEmpleados.empleado.show",["empleado"=>Empleado::findOrFail($id)]);

}

public function edit($id){

	return view("gestionEmpleados.empleado.edit",["empleado"=>Empleado::findOrFail(id)]);

}

public function update(EmpleadoFromRequest $request,$id){

	$empleado=Empleado::findOrFail($id);
	$empleado->cedula=$request->get(cedula);
	$empleado->nombre=$request->get(nombre);
	$empleado->apellidos=$request->get(apellidos);
	$empleado->fecha_naci=$request->get(fecha_naci);
	$suplidor->direccion=$request->get(direccion);
	$suplidor->update();
	return Redirect::to(gestionEmpleados/empleado);


}

public function destroy($id){
	

}

}
