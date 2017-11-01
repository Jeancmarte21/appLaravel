<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;

use appVS\Http\Requests;
use appVS\Empleado;
use Illuminate\Support\Facades\Redirect;
use appVS\Http\Requests\EmpleadoFormRequest;
use DB;
use Validator;
use Auth;


class EmpleadosController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        
            return view('empleados.create');
        
    }
    public function create()
    {
        return view("empleados.create");
    }
    public function store (EmpleadoFormRequest $request)
    {
      

        $empelado=new Empleado;
        $empleado->nombre=$request->get('nombre');
        $empleado->apellidos=$request->get('apellidos');
        $empleado->fecha_nacimiento=$request->get('fecha_nacimiento');
        $empleado->direccion=$request->get('direccion');
        $empleado->save();
        return Redirect::to('empleados');
    }
    public function show($id)
    {
        return view("empleados.show",["empleado"=>Empleado::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("empleados.edit",["categoria"=>Empleado::findOrFail($id)]);
    }
    public function update(CategoriaFormRequest $request,$id)
    {
        $empelado=Empleado::findOrFail($id);
        $empleado->nombre=$request->get('nombre');
        $empleado->apellidos=$request->get('apellidos');
        $empleado->fecha_nacimiento=$request->get('fecha_nacimiento');
        $empleado->direccion=$request->get('direccion');
        $empelado->update();
        return Redirect::to('empleados');
    }
    public function destroy($id)
    {
     
      
    }





}
