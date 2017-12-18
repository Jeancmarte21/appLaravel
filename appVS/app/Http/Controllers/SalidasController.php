<?php

namespace appVS\Http\Controllers;

use appVS\Salida;
use Illuminate\Http\Request;
use appVS\MateriaPrima;
use appVS\Http\Requests\StoreSalidaRequest;
use DB;

class SalidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index(Request $request)
    {

        $request->user()->authorizeRoles(['user', 'admin']);

        $salidas = Salida::all();
        $materiasprimas = MateriaPrima::all();
        return view('salidas.index', ['salidas'=> $salidas, 'materiasprimas' => $materiasprimas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiasprimas =  MateriaPrima::all();
        return view('salidas.create', ['materiasprimas'=> $materiasprimas]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSalidaRequest $request)
    {
        $inventario = MateriaPrima::find($request->input('nombre'));
        if($inventario->existencia_real < $request->input('cantidad')){
          return back()->withInput()->with('errors', 'Cantidad digitada excede la cantidad disponible en el almacen');
        }
        $salida = Salida::create([
                'materiaprima_id' => $request->input('nombre'),
                'cantidad' => $request->input('cantidad'),
                'fecha' => date('Y-m-d')
                ]);
        $salida->save();
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
        $salida = Salida::find($salida->idsalida);
        return view('salidas.show', ['salida'=>$salida]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function edit(Salida $salida)
    {
        $salida = Salida::find($salida->idsalida);
        $materiasprimas = MateriaPrima::all();
        return view('salidas.edit',['salida'=>$salida, 'materiasprimas' => $materiasprimas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSalidaRequest $request, Salida $salida)
    {
        //
        $salidaUpdate = Salida::where('idsalida', $salida->idsalida)
            ->update([
            'materiaprima_id' => $request->input('nombre'),
            'cantidad' => $request->input('cantidad'),
            'fecha' => $request->input('fecha')
            ]);
        if($salidaUpdate){
                return redirect()->route('salidas.show', ['salida'=>$salida])->with('success', 'Salida actualizada correctamente!');
            }
            return back()->withInput()->with('errors', 'Hubo algun error en registro de la salida');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salida $salida)
    {
        $salidas = Salida::find($salida->idsalida);
        if($salidas->delete()){
            return redirect()->route('salidas.index')
            ->with('success', 'Salida borrada correctamente');
        }
        return back()->with('errors', 'No se pudo borrar la Salida');

    }
}
