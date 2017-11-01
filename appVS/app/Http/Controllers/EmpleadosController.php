<?php

namespace appVS\Http\Controllers;

use appVS\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;

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
        return view('empleados.index', ['empleados'=> $empleados]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("empleados.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Empleado $empleados)
    {
        
$empleados ->empleados()->create($request->all());
$empleados ->save($empleados); 

         /*return request()->all();*/
    /*$empleado=new Empleado;
    $empleado->cedula=$request->get('cedula');
    $empleado->nombre=$request->get('nombre');
    $empleado->apellidos=$request->get('apellidos');
    $empleado->fecha_naci=$request->get('fecha_nacimiento');
    $empleado->direccion=$request->get('direccion');
    $empleado->save();
    return Redirect::to('empleados');*/
    
        /*request()->validate([
            'cedula' => 'required|numeric',
            'nombre' => 'required|alpha',
            'apellidos' => 'required|alpha',
            'fecha_nacimiento' => 'required|date',
            'direccion' => 'alpha_dash'
            ]);

        Empleado::create($request->all());

        return redirect()->route('empleados.index');
        */
          /* $empleado = Empleado::create([
                'cedula' => $request->input('cedula'),
                'nombre' => $request->input('nombre'),
                'apellidos' => $request->input('apellidos'),
                'fecha_nacimiento' => $request->input('fecha_nacimiento'),
                'direccion' => $request->input('direccion')
                ]); 
            $empleado->save();

           return back();*/
          // return redirect()->route('empleado.index');
       //if($empleado){
       //     return redirect()->route('empleados.show', ['empleado'=> $empleado->idempleado])->with('success', 'Empleado creado correctamente');
       // }
        //return back()->withInput()->with('errors', 'Error registrando empleado');

        
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
        $empleado = Empleado::find($empleado->idempleado);
        return view('empleados.show', ['empleado'=>$empleado]);
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
        $empleado = Empleado::find($empleado->idempleado);
        return view('empleados.edit', ['empleado'=>$empleado]);
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
        $empleadoUpdate = Empleado::where('idempleado', $empleado->idempleado)
            ->update([
            'cedula' => $request->input('cedula'),
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'direccion' => $request->input('direccion')
            ]);

            if($empleadoUpdate){
                return redirect()->route(empleados.show, ['empleado'=>$empleado->idempleado])->with('success', 'Empleado editado correctamente');
            }

            return back()->withInput();
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
