<?php

namespace appVS\Http\Controllers;

use appVS\Salida;
use Illuminate\Http\Request;

class SalidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          if ($request)
        {
            $query=trim($request->get('searchText'));
            $salidas=DB::table('salida')->where('cantidad','LIKE','%'.$query.'%')
            ->orderBy('fecha','desc')
            ->paginate(10);
            return view('salidas.index',["salidas"=>$salidas,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salida = Entrada::create([
                'materiaprima_id' => $request->input('nombre'),
                'cantidad' => $request->input('cantidad'),
               
                ]);
        if($salida){
                return back()->with('success', 'Salida registrada correctamente!');
            }
            return back()->withInput()->with('errors', 'Hubo algun error en registro de la salida');
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function show(Salida $salida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function edit(Salida $salida)
    {
        return view("salidas.edit",["salida"=>Salida::findOrFail($idsalida)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salida $salida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salida $salida)
    {
        //
    }
}
