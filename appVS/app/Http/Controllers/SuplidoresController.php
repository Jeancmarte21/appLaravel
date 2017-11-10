<?php

namespace appVS\Http\Controllers;
use appVS\Suplidor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('suplidores.index', ['suplidores' => $suplidores]);


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

           $suplidor->save();
           return back()->with('success', 'Suplidor creado correctamente');;

    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function show($idsuplidor)
    {
        
        return view("suplidores.show",["suplidor"=>Suplidor::findOrFail($idsuplidor)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function edit($idsuplidor)
    {
        return view("suplidores.edit",["suplidor"=>Suplidor::findOrFail($idsuplidor)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $suplidor)
    {
        $suplidorUpdate = Suplidor::find($suplidor)
            ->update([
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
            'correo' => $request->input('correo'),
             'pais' => $request->input('pais'),
            'direccion' => $request->input('direccion')
            ]);
            if($suplidorUpdate){
                return redirect()->route('suplidores.show', ['suplidor'=>$suplidor])->with('success', 'Suplidor editado correctamente');
            }
            return back()->withInput();
            
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


