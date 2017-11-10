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
        return view('maquinas.index', ['maquinas'=>$maquinas]);
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
       
            $maquina = Maquina::create([
               
                'nombre' => $request->input('nombre'),
                'produccion' => $request->input('pago')
                ]);
            $maquina->save();

            return back()->with('success', 'Maquina Registrada');
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
        $maquina = Maquina::find($maquina->idmaquina);
        return view('maquinas.show', ['maquina'=>$maquina]);
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
        $maquina = Maquina::find($maquina->idmaquina);
        return view('maquinas.edit', ['maquina'=>$maquina]);
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
        $maquinaUpdate = Maquina::where('idmaquina', $maquina->idmaquina)
            ->update([
            'nombre' => $request->input('nombre'),
            'produccion' => $request->input('pago'),
            ]);
            if($maquinaUpdate){
                return redirect()->route('maquinas.show', ['maquina'=>$maquina->idmaquina])->with('success', 'Maquina editada correctamente');
            }
            return back()->withInput();
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
