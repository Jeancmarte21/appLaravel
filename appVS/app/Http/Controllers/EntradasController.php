<?php

namespace appVS\Http\Controllers;

use appVS\Entrada;
use appVS\Suplidor;
use appVS\MateriaPrima;
use Illuminate\Http\Request;
use appVS\Http\Requests\StoreEntradaRequest;
use DB;

class EntradasController extends Controller
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
     $entradas = Entrada::all();
     $suplidores = Suplidor::all();
     $materiasprimas = MateriaPrima::all();
     return view('entradas.index', ['entradas'=> $entradas, 'materiasprimas' => $materiasprimas,'suplidores' => $suplidores]);


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
    public function store(StoreEntradaRequest $request)
    {
        $entrada = Entrada::create([
                'materiaprima_id' => $request->input('nombre'),
                'precio' => $request->input('precio'),
                'cantidad' => $request->input('cantidad'),
                'fecha' => date('Y-m-d'),
                'suplidor_id' => $request->input('suplidor')
                ]);
        if($entrada){
                $enabler = ($entrada->materiasprimas->costo) ? 1: 2;
                $matprimUpdate = MateriaPrima::find($entrada->materiaprima_id)
                ->update([
                'existencia_real' => $entrada->materiasprimas->existencia_real + $entrada->cantidad,
                'costo_ant' => $entrada->materiasprimas->costo,
                'costo' => ($entrada->materiasprimas->costo + $entrada->precio * $enabler)/2
                        ]);
                return back()->with('success', 'Entrada registrada correctamente!');
            }
            return back()->withInput()->with('errors', 'Hubo algun error en registro de la entrada');

    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function show(Entrada $entrada)
    {
      $entrada = Entrada::find($entrada->identrada);
      return view('entradas.show', ['entrada'=>$entrada]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreEntradaRequest $entrada)
    {
      $entrada = Entrada::find($entrada->identrada);
      $materiasprimas = MateriaPrima::all();
      $suplidores = Suplidor::all();
      return view('entradas.edit',['entrada'=>$entrada, 'materiasprimas' => $materiasprimas, 'suplidores' => $suplidores]);
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
      $entradaUpdate = Entrada::where('identrada', $entrada->identrada)
          ->update([
            'materiaprima_id' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'cantidad' => $request->input('cantidad'),
            'fecha' => $request->input('fecha'),
            'suplidor_id' => $request->input('suplidor')
          ]);
      if($entradaUpdate){
              return redirect()->route('entradas.show', ['entrada'=>$entrada])->with('success', 'Entrada actualizada correctamente!');
          }
          return back()->withInput()->with('errors', 'Hubo algun error en registro de la Entrada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrada $entrada)
    {

        $entry = Entrada::find($entrada->identrada);
                $matprimUpdate = MateriaPrima::find($entrada->materiaprima_id)
                ->update([
                'existencia_real' => $entry->materiasprimas->existencia_real - $entry->cantidad,
                'costo' => $entry->materiasprimas->costo_ant
                        ]);
        if($entry->delete()){
            return redirect()->route('entradas.index')
            ->with('success', 'Entrada borrada correctamente');
        }
        return back()->with('errors', 'No se pudo borrar la Entrada');
    }
}
