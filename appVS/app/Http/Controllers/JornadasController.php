<?php

namespace appVS\Http\Controllers;

use appVS\Jornada;
use appVS\Empleado;
use appVS\Maquina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use appVS\Http\Requests\StoreJornadaRequest;
use appVS\Http\Requests\FechaNominaRequest;
use DB;
use PDF;

class JornadasController extends Controller
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
      $empleados = Empleado::all();
      $maquinas = Maquina::all();
      $jornadas = Jornada::paginate(8);


      return view('jornadas.index', ['jornadas' => $jornadas,'empleados' => $empleados, 'maquinas' => $maquinas]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empleados = Empleado::all();
        $maquinas = Maquina::all();
        return view('jornadas.create', ['empleados' => $empleados, 'maquinas' => $maquinas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJornadaRequest $request)
    {
      $empleado = Empleado::find($request->input('empleado'));
       $jornada = Jornada::create([
                'maquina_id' => $request -> input('maquina'),
                'empleado_id' => $request -> input('empleado'),
                'incentivo' => $request->input('incentivo'),
                'hora_extra' => $request->input('hora_extra'),
                'fecha' => $request->input('fecha'),
                'jornada_doble' => $request->input('jornada_doble'),
                'extra' => ($request->input('hora_extra') * $empleado->salario_hora) + ($request->input('jornada_doble') * $empleado->salario_dia)
                ]);
       $jornada ->save();

       if($jornada){
               return back()->with('success', 'Jornada registrada correctamente!');
           }
           return back()->withInput()->with('errors', 'Hubo algun error en registro de la jornada');

    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function show($idjornada)
    {
        return view("jornadas.show",["jornada"=>Jornada::findOrFail($idjornada)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
     public function edit(Jornada $jornada)
     {
         $jornada = Jornada::find($jornada->idjornada);
         $maquinas= Maquina::all();
         return view('jornadas.edit',['jornada'=>$jornada, 'maquinas' => $maquinas]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function update(StoreJornadaRequest $request,$jornada)
    {
      $jornadaUpdate = Jornada::find($jornada)
          ->update([
            'maquina_id' => $request -> input('maquina'),
            'empleado_id' => $request -> input('empleado'),
            'incentivo' => $request->input('incentivo'),
            'hora_extra' => $request->input('hora_extra'),
            'fecha' => $request->input('fecha'),
            'jornada_doble' => $request->input('jornada_doble')

          ]);
          if($jornadaUpdate){
              return redirect()->route('jornadas.show', ['jornada'=>$jornada])->with('success', 'Jornada editada correctamente');
          }
          return back()->withInput()->with('errors', 'Hubo algun error en registro de la Jornada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jornada $jornada)
    {
      $jornadas = Jornada::find($jornada->idjornada);
      if($jornadas->delete()){
          return redirect()->route('jornadas.index')
          ->with('success', 'Jornada borrada correctamente');
      }
      return back()->with('errors', 'No se pudo borrar la Jornada');
    }




}
