<?php

namespace appVS\Http\Controllers;

use appVS\Entrada;
use appVS\Suplidor;
use appVS\MateriaPrima;
use Illuminate\Http\Request;

class EntradasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('entradas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $suplidores = Suplidor::all();
        $materiasprimas = MateriaPrima::all();
        return view('entradas.create', ['suplidores' => $suplidores, 'materiasprimas'=>$materiasprimas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrada = Entrada::create([
                'materiaprima_id' => $request->input('nombre'),
                'precio' => $request->input('precio'),
                'cantidad' => $request->input('cantidad'),
                'fecha' => $request->input('fecha'),
                'suplidor_id' => $request->input('suplidor')
                ]);
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function show(Entrada $entrada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrada $entrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrada $entrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrada $entrada)
    {
        //
    }
}
