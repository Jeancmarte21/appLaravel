<?php

namespace appVS\Http\Controllers;

use appVS\ProduccionMaquina;
use Illuminate\Http\Request;

class ProduccionesMaquinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('produccionesmaquinas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produccionesmaquinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            $empleado = Empleado::create([
                'maquina_idmaquina' => $request->input('maquina_idmaquina'),
                'cigarro_idcigarro' => $request->input('cigarro_idcigarro'),
                'configuracion_idconfiguracion' => $request->input('configuracion_idconfiguracion'),
                'cantidad' => $request->input('cantidad'),
                'fecha' => $request->input('fecha'),
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\ProduccionMaquina  $produccionMaquina
     * @return \Illuminate\Http\Response
     */
    public function show(ProduccionMaquina $produccionMaquina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\ProduccionMaquina  $produccionMaquina
     * @return \Illuminate\Http\Response
     */
    public function edit(ProduccionMaquina $produccionMaquina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\ProduccionMaquina  $produccionMaquina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProduccionMaquina $produccionMaquina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\ProduccionMaquina  $produccionMaquina
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProduccionMaquina $produccionMaquina)
    {
        //
    }
}
