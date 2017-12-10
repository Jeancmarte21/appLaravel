<?php

namespace appVS\Http\Controllers;

use appVS\Jornada;
use appVS\Empleado;
use appVS\Maquina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use appVS\Http\Requests\StoreJornadaRequest;
use DB;

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
      $jornadas = Jornada::all();


      return view('jornadas.index', ['jornadas' => $jornadas,'empleados' => $empleados, 'maquinas' => $maquinas]);
        /* if ($request)
        {

            $jornad=DB::table('jornada')->join('empleado', 'jornada.empleado_id', '=', 'empleado.idempleado')
            ->join('maquina', 'jornada.maquina_id', '=', 'maquina.idmaquina')
            ->select('jornada.*', 'empleado.nombre', 'empleado.apellidos', 'maquina.nombre as maquina')
            return view('jornadas.index',["jornad"=>$jornad]);
        }*/


        //$jornadas = Jornada::all();
        //return view('jornadas.index');
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
       $jornada = Jornada::create([
                'maquina_id' => $request -> input('maquina'),
                'empleado_id' => $request -> input('empleado'),
                'incentivo' => $request->input('incentivo'),
                'hora_extra' => $request->input('hora_extra'),
                'fecha' => $request->input('fecha'),
                'jornada_doble' => $request->input('jornada_doble')
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
         $empleados = Empleado::all();
         return view('jornadas.edit',['jornada'=>$jornada, 'maquinas' => $maquinas, 'empleados' => $empleados]);
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

    public function nomina(){

    // $empleado = Empleado::has('jornadas')->whereBetween('fecha', ['12-08-2017', '12-10-2017'])->tosql();
    //$empleado = Empleado::has('jornadas')->whereBetween('fecha', ['2017-12-01', '2017-12-31'])->get(); 
    //$empleado = Empleado::whereHas('jornadas', function($q){
    //$q->whereBetween('fecha', ['2017-12-01', '2017-12-31']);})->get();
      $jornadas = Jornada::whereBetween('fecha',['2017-12-01', '2017-12-31'])
                          ->groupBy('empleado_id')
                          ->get();
     return view('nomina', ['jornadas'=>$jornadas]);
   }
}
