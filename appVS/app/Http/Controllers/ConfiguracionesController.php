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
        return view('configuraciones.index');
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
       $configuracion = Configuracion::create([
                               
                'nombre' => $request->input('nombre'),
                'fecha' => $request->input('fecha')
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function show(Configuracion $configuracion)
    {
        //
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
    public function destroy(Configuracion $configuracion)
    {
        //
    }
}
