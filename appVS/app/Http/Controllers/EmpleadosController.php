<?php

namespace appVS\Http\Controllers;

use appVS\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
        $empleados = Empleado::all();
        return view('empleados.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
            $empleado = Empleado::create([
                'cedula' => $request->input('nombre'),
                'nombre' => $request->input('cedula'),
                'apellidos' => $request->input('apellidos'),
                'fecha_nacimiento' => $request->input('fecha_nacimiento'),
                'direccion' => $request->input('direccion'),
                ]);
            
        if($empleado){
            return redirect()->route('empleados.show', ['empleado'=> $empleado->idempleado])->with('success', 'Empleado creado correctamente');
        }
        return back()->withInput()->with('errors', 'Error registrando empleado');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
