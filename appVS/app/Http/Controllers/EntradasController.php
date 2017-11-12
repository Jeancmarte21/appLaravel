<?php

namespace appVS\Http\Controllers;

use appVS\Entrada;
use appVS\Suplidor;
use appVS\MateriaPrima;
use Illuminate\Http\Request;
use DB;

class EntradasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return view('entradas.index');
      $entradas = Entrada::all();
     return view('entradas.index', ['entradas' => $entradas]);
       /*   if ($request)
        {
            $query=trim($request->get('searchText'));
            $entry=Entrada::all();
            $entradas = $entry->materiasprimas->where('nombre', 'LIKE', '%'.query.'%')
            ->orderBy('fecha','desc')
            ->paginate(10);
            return view('entradas.index',['entradas'=>$entradas,'searchText'=>$query]);
        }
        */
        
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
        if($entrada){
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
       return view("entradas.edit",["entrada"=>Entrada::findOrFail($entrada)]);
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
        $entry = Entrada::find($entrada->identrada);
        if($entry->delete()){
            return redirect()->route('entradas.index')
            ->with('success', 'Entrada borrada correctamente');
        }
        return back()->with('errors', 'No se pudo borrar la Entrada');
    }
}
