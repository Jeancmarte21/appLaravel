<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;

use appVS\Http\Request;
use appVS\MateriaPrima;
use Illuminate\Support\Facades\Redirect;
use appVS\Http\Request\MateriaPrimaFromRequest;
use DB;

class MateriaPrimaController extends Controller
{
    public function__construct(){

   }

    public function index(Request $request){

   	if($request)
   	{
   		$query=trim($request->get('searchText'));//filtro de busqueda

   		$materiaPrima=DB::table('materiaPrima')->where('nombre','LIKE','%'.$query.'%')->orderBy('idmateriaPrima','desc')
   		    ->paginate(7);
   		    return view('gestionMateriaPrima.materiaPrima.index',["materiaPrima"=>$materiaPrima,"searchText"=>$query]);
   	}

   }

public function create(){ 

	return view("gestionMateriaPrima.materiaPrima.create");

}

public function store(EmpleadoFromRequest $request){

	$materiaPrima=new MateriaPrima;
	$materiaPrima->nombre=$request->get('nombre');
	$materiaPrima->categoria=$request->get('categoria');
	$materiaPrima->porcentaje_pesohumedo=$request->get('porcentaje_pesohumedo');
	$materiaPrima->existencia_minima=$request->get('existencia_minima');
	$materiaPrima->existencia_real=$request->get('existencia_real');
	$cigarro->save();
	return Redirect::to(gestionMateriaPrima/materiaPrima);
	

}

public function show($id){

	return view("gestionMateriaPrima.materiaPrima.show",["materiaPrima"=>MateriaPrima::findOrFail($id)]);

}

public function edit($id){

	return view("gestionMateriaPrima.materiaPrima.edit",["materiaPrima"=>MateriaPrima::findOrFail(id)]);

}

public function update(MateriaPrimaFromRequest $request,$id){

	$materiaPrima=MateriaPrima::findOrFail($id);
	$materiaPrima->nombre=$request->get(nombre);
	$materiaPrima->categoria=$request->get(categoria);
	$materiaPrima->=porcentaje_pesohumedo=$request->get(porcentaje_pesohumedo);
	$materiaPrima->existencia_minima=$request->get(existencia_minima);
	$materiaPrima->existencia_real=$request->get(existencia_real);
	$cigarro->update();
	return Redirect::to(gestionMateriaPrima/materiaPrima);


public function destroy($id){
	

}
}
