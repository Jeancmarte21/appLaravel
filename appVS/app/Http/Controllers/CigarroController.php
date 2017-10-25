<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;

use appVS\Http\Request;
use appVS\Cigarro;
use Illuminate\Support\Facades\Redirect;
use appVS\Http\Request\CigarroFromRequest;
use DB;

class CigarroController extends Controller
{
    
public function__construct(){

   }

    public function index(Request $request){

   	if($request)
   	{
   		$query=trim($request->get('searchText'));//filtro de busqueda

   		$cigarro=DB::table('cigarro')->where('nombre','LIKE','%'.$query.'%')->orderBy('idcigarro','desc')
   		    ->paginate(7);
   		    return view('produccion.cigarro.index',["cigarros"=>$cigarros,"searchText"=>$query]);
   	}

   }

public function create(){ // crear nuevo cigarro

	return view("produccion.cigarro.create");

}

public function store(EmpleadoFromRequest $request){

	$cigarro=new Cigarro;
	$cigarro->nombre=$request->get('nombre');
	$cigarro->tipo_cigarro=$request->get('tipo_cigarro');
	$cigarro->materiaPrima_idmateriaPrima=$request->get('materiaPrima_idmateriaPrima');
	$cigarro->save();
	return Redirect::to(produccion/cigarro);
	

}

public function show($id){

	return view("produccion.cigarro.show",["cigarro"=>Cigarro::findOrFail($id)]);

}

public function edit($id){

	return view("produccion.cigarro.edit",["cigarro"=>Cigarro::findOrFail(id)]);

}

public function update(CigarroFromRequest $request,$id){

	$cigarro=Cigarro::findOrFail($id);
	$cigarro->nombre=$request->get(nombre);
	$cigarro->tipo_cigarro=$request->get(tipo_cigarro);
	$cigarro->=materiaPrima_idmateriaPrima=$request->get(materiaPrima_idmateriaPrima);
	$cigarro->update();
	return Redirect::to(produccion/cigarro);


public function destroy($id){
	

}


}
