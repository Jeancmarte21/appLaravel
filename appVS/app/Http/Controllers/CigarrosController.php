<?php

namespace appVS\Http\Controllers;

use appVS\Cigarro;
use appVS\MateriaPrima;
use DB;
use Illuminate\Http\Request;

class CigarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cigarros = Cigarro::all();
       return view('cigarros.index', ['cigarros'=> $cigarros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiasprimas = DB::table('materiaPrima')->where('categoria', 'like', 'Saborizante')->get();
        return view('cigarros.create', ['materiasprimas' => $materiasprimas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $cigarro = Cigarro::create([
                
                'nombre' => $request->input('nombre'),
                'tipo' => $request->input('tipo_cigarro'),
                'saborizante' => $request->input('saborizante')

        ]);
     $cigarro->save();
            
    return back()->with('success', 'Cigarro creado correctamente');
 }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Cigarro  $cigarro
     * @return \Illuminate\Http\Response
     */
    public function show($idcigarro)
    {
        
        return view("cigarros.show",["cigarros"=>Cigarro::findOrFail($idcigarro)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Cigarro  $cigarro
     * @return \Illuminate\Http\Response
     */
     public function edit($idcigarro)
    {
        return view("cigarros.edit",["cigarro"=>Cigarro::findOrFail($idcigarro)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Cigarro  $cigarro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cigarro $cigarro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Cigarro  $cigarro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cigarro $cigarro)
    {
        //
    }
}
