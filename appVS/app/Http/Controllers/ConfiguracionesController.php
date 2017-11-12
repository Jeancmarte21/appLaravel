<?php

namespace appVS\Http\Controllers;

use appVS\Configuracion;
use appVS\Cigarro;
use DB;
use Illuminate\Http\Request;

class ConfiguracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $configuraciones = Configuracion::all();
        return view('configuraciones.index', ['configuraciones'=> $configuraciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cigarros = Cigarro::all();
        $configuraciones = Configuracion::all();
        $materiasprimas = DB::table('materiaPrima')->where('categoria', 'like', 'Tabaco')->get();
        return  view('configuraciones.create', ['configuraciones'=> $configuraciones, 'materiasprimas' => $materiasprimas, 'cigarros' => $cigarros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  $cigarro = Cigarro::find($request->input('cigarro'));
      //  if(strcmp($cigarro->tipo,'Vitolas') == 0)
       $configuracion = Configuracion::create([
                'cigarro_id' => $request -> input('cigarro'),
                'nombre' => $request->input('nombre'),
                'fecha' => $request->input('fecha')
                ]);
       $configuracion->save();

       if($configuracion){
           return redirect()->route('configuraciones.show', ['configuracion'=>$configuracion->idconfiguracion])->with('success', 'Configuracion creado correctamente');
       }
       return back()->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function show($idconfiguracion)
    {
  return view("configuraciones.show",["configuracion"=>Configuracion::findOrFail($idconfiguracion)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuracion $configuracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuracion $configuracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function destroy($configuracion)
    {
      $config = Configuracion::find($configuracion);
      if($config->delete()){
          return redirect()->route('configuraciones.index')
          ->with('success', 'Configuracion borrada!!');
      }
      return back()->with('errors', 'No se pudo borrar la configuracion');
    }
}
