<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;

/*use appVS\Http\Request;*/
use appVS\Suplidor;
use Illuminate\Support\Facades\Redirect;
use appVS\Http\Request\SuplidorFromRequest;
use DB;


class SuplidorController extends Controller
{
  /* <!--public function__construct(){

   } */
   public function index(Request $request){

   	if($request)
   	{
   		$query=trim($request->get('searchText'));//filtro de busqueda

   		$suplidores=DB::table('suplidor')->where('nombre','LIKE','%'.$query.'%')
   		->orderBy('idsuplidor','desc')
   		    ->paginate(7);
   		    return view('gestionSuplidores.suplidor.index',["suplidores"=>$suplidores,"searchText"=>$query]);
   	}

   }
public function create(){

	return view("gestionSuplidores.suplidor.create");

}
public function store(SuplidorFromRequest $request){

	$suplidor=new Suplidor;
	$suplidor->nombre=$request->get('nombre');
	$suplidor->telefono=$request->get('telefono');
	$suplidor->correo=$request->get('correo');
	$suplidor->pais=$request->get('pais');
	$suplidor->direccion=$request->get('direccion');
	$suplidor->save();
	return Redirect::to(gestionSuplidores/suplidor);
	

}
public function show($id){

	return view("gestionSuplidores.suplidor.show",["suplidor"=>Suplidor::findOrFail($id)]);

}
public function edit($id){

	return view("gestionSuplidores.suplidor.edit",["suplidor"=>Suplidor::findOrFail(id)]);

}
public function update(SuplidorFromRequest $request,$id){

	$suplidor=Suplidor::findOrFail($id);
	$suplidor->nombre=$request->get(nombre);
	$suplidor->telefono=$request->get(telefono);
	$suplidor->correo=$request->get(correo);
	$suplidor->pais=$request->get(pais);
	$suplidor->direccion=$request->get(direccion);
	$suplidor->update();
	return Redirect::to(gestionSuplidores/suplidor);


}

public function destroy($id){
	

}



}
