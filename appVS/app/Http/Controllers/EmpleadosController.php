<?php

namespace appVS\Http\Controllers;
use appVS\Empleado;
use Illuminate\Http\Request;
use appVS\Http\Requests\StoreEmpleado;
use appVS\Http\Requests\UpdateEmpleado;
use Illuminate\Support\Facades\Auth;
use PDF;
use DB;
use Charts;

class EmpleadosController extends Controller
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

      if ($request)
      {
          $query=trim($request->get('searchText'));
          $empleados=DB::table('empleado')
          ->where('nombre','LIKE','%'.$query.'%')
          ->orwhere('apellidos','LIKE','%'.$query.'%')
          ->orderBy('idempleado','desc')
          ->paginate(7);
          return view('empleados.index',["empleados"=>$empleados,"searchText"=>$query]);
      }


        $empleados = Empleado::paginate(5);
        return view('empleados.index', ['empleados'=> $empleados]);


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $empleados =  Empleado::all();
      return view('empleados.create', ['empleados'=> $empleados]);


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpleado $request)
    {

           $empleado = Empleado::create([
                'cedula' => $request->input('cedula'),
                'nombre' => $request->input('nombre'),
                'apellidos' => $request->input('apellidos'),
                'fecha_nacimiento' => $request->input('fecha_nacimiento'),
                'telefono' => $request->input('telefono'),
                'direccion' => $request->input('direccion'),
                'salario_dia' => $request->input('salario_dia'),
                'salario_hora' => $request->input('salario_hora')
                ]);
            $empleado->save();



           if($empleado){
               return back()->with('success', 'Empleado registrado correctamente!');
           }
           return back()->withInput()->with('errors','Hubo algun error en registro de empleado');




    }
    /**
     * Display the specified resource.
     *
     * @param  \appVS\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
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
    public function update(UpdateEmpleado $request, Empleado $empleado)
    {

        $empleadoUpdate = Empleado::where('idempleado', $empleado->idempleado)
            ->update([
            'cedula' => $request->input('cedula'),
            'nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'salario_dia' => $request->input('salario_dia'),
            'salario_hora' => $request->input('salario_hora')
            ]);
            if($empleadoUpdate){
                return redirect()->route('empleados.show', ['empleado'=>$empleado])->with('success', 'Empleado editado correctamente');
            }
            return back()->withInput()->with('errors', 'Hubo algun error en registro de Empleado');


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
      $empleado = Empleado::find($empleado->idempleado);
        if($empleado->delete()){
            return redirect()->route('empleados.index')
            ->with('success', 'Empleado borrado correctamente');
        }
        return back()->with('errors', 'No se pudo borrar el Empleado');

    }
    public function downloadPDF(){

     $empleado =Empleado::all();
     $pdf = PDF::loadView('empleados.pdf', compact('empleado'));
     return $pdf->download('empleados.pdf');
   }

   public function nomina(){

     $empleado = die(Empleado::has('jornadas')->whereBetween('fecha', ['12-08-2017', '12-10-2017'])->tosql());
     return view('nomina', ['empleado' => $empleado]);
   }


}
