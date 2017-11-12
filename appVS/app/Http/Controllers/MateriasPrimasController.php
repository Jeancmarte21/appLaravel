<?php

namespace appVS\Http\Controllers;

use appVS\MateriaPrima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriasPrimasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiasPrimas= MateriaPrima::all();
        return view('materiasPrimas.index', ['materiasPrimas' => $materiasPrimas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materiasPrimas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materiaPrima = MateriaPrima::create([
                'nombre' => $request->input('nombre'),
                'categoria' => $request->input('categoria'),
                'porcentaje_pesohumedo' => $request->input('porcentaje_pesohumedo'),
                'existencia_minima' => $request->input('existencia_minima'),
                //'existencia_real' => $request->input('existencia_real'),
                ]);

           $materiaPrima->save();

           return back()->with('success', 'Materia prima creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function show($idmateriaPrima)
    {
        //$materiaprima = MateriaPrima::find($materiaPrima->idmateriaPrima);
        //return view('materiasPrimas.show',['materiaPrima' => $materiaprima]);
        return view("materiasPrimas.show",["materiaPrima"=>MateriaPrima::findOrFail($idmateriaPrima)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function edit($idmateriaPrima)
    {
          return view("materiasPrimas.edit",["materiaPrima"=>MateriaPrima::findOrFail($idmateriaPrima)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $materiaPrima)
    {
        //
        $matprimUpdate = MateriaPrima::find($materiaPrima)
            ->update([
            'nombre' => $request->input('nombre'),
            'categoria' => $request->input('categoria'),
            'porcentaje_pesohumedo' => $request->input('porcentaje_pesohumedo'),
            'existencia_minima' => $request->input('existencia_minima')
            ]);
            if($matprimUpdate){
                return redirect()->route('materiasPrimas.show', ['materiaPrima'=>$materiaPrima])->with('success', 'Materia Prima editada correctamente');
            }
            return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function destroy($materiaPrima)
    {
      $materiaP = MateriaPrima::find($materiaPrima);
      if($materiaP->delete()){
          return redirect()->route('materiasPrimas.index')
          ->with('success', 'Materia Prima borrada correctamente');
      }
      return back()->with('errors', 'No se pudo borrar la Materia Prima');
    }
}
