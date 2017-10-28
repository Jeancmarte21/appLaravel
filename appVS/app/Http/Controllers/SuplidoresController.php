<?php

namespace appVS\Http\Controllers;

use appVS\Suplidor;
use Illuminate\Http\Request;

class SuplidoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplidores = Suplidor::all();
        return view('suplidores.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('suplidores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $suplidor = Suplidor::create([
                'nombre' => $request->input('nombre'),
                'telefono' => $request->input('telefono'),
                'correo' => $request->input('correo'),
                'pais' => $request->input('pais'),
                'direccion' => $request->input('direccion'),
                ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function show(Suplidor $suplidor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function edit(Suplidor $suplidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suplidor $suplidor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suplidor $suplidor)
    {
        //
    }
}
