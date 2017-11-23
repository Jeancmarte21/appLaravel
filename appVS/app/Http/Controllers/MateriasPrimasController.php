<?php

namespace appVS\Http\Controllers;

use appVS\MateriaPrima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use appVS\Http\Requests\StoreMateriaPrimaRequest;

class MateriasPrimasController extends Controller
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
    public function store(StoreMateriaPrimaRequest $request)
    {
        $materiaPrima = MateriaPrima::create([
                'nombre' => $request->input('nombre'),
                'categoria' => $request->input('categoria'),
                'porcentaje_pesohumedo' => $request->input('porcentaje_pesohumedo'),
                'existencia_minima' => $request->input('existencia_minima'),
                //'existencia_real' => $request->input('existencia_real'),
                ]);

           $materiaPrima->save();

          if($materiaPrima){
      return redirect()->route('materiasPrimas.show', ['materiaPrima'=>$materiaPrima->idmateriaprima])->with('success', 'Materia Prima creada correctamente');
        }
        return back()->withInput()->with('errors', 'Hubo un error al crear la Materia Prima');
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
        $empleado = MateriaPrima::find($idmateriaPrima);
        return view('materiasPrimas.show', ['materiaPrima'=>$empleado]);
       // return view("materiasPrimas.show",["materiaPrima"=>MateriaPrima::findOrFail($idmateriaPrima)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function edit($idmateriaPrima)
    {     
        $materiaprima = MateriaPrima::find($idmateriaPrima);
        return view("materiasPrimas.edit",["materiaPrima"=> $materiaprima]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMateriaPrimaRequest $request, $materiaPrima)
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
