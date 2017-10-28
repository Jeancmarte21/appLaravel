<?php

namespace appVS\Http\Controllers;

use appVS\Maquina;
use Illuminate\Http\Request;

class MaquinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $maquinas = Maquina::all();
        return view('maquinas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('maquinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function show(Maquina $maquina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function edit(Maquina $maquina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maquina $maquina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Maquina  $maquina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maquina $maquina)
    {
        //
    }
}
