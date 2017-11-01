<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;

use appVS\Http\Requests;
use appVS\Empleado;
use Illuminate\Support\Facades\Redirect;
//use appVS\Http\Requests\EmpleadoFormRequest;
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
        
            $empleados = Empleado::all();
        return view('empleados.index', ['empleados'=> $empleados]);
        
    }
    public function create()
    {
        return view("empleados.create");
    }
    public function store (Request $request)
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
          $empleado = Empleado::find($empleado->idempleado);
        return view('empleados.show', ['empleado'=>$empleado]);

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
