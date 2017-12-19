<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;
use appVS\Jornada;
use appVS\Empleado;
use appVS\Maquina;
use Illuminate\Support\Facades\Redirect;
use appVS\Http\Requests\StoreJornadaRequest;
use appVS\Http\Requests\FechaNominaRequest;
use DB;
use PDF;

class NominasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request)
        {
            $fecha_desde=trim($request->get('fecha_desde'));
            $fecha_hasta=trim($request->get('fecha_hasta'));

        $jornadas= DB::table('jornada')
                    ->join('empleado', 'jornada.empleado_id', '=', 'empleado.idempleado')
                    ->select('jornada.empleado_id','empleado.nombre', 'empleado.apellidos',
                                DB::raw('SUM(jornada.incentivo) as incent,
                                count(jornada.idjornada)*empleado.salario_dia as salario,
                                sum(jornada.extra) as extra,
                                round((count(jornada.idjornada)*empleado.salario_dia*2.87) / 100, 0) as tss,
                                round((count(jornada.idjornada)*empleado.salario_dia*3.04) / 100, 0) as afs'))
                    ->whereBetween('fecha',[$fecha_desde, $fecha_hasta])
                    ->groupBy('jornada.empleado_id')
                    ->orderBy('empleado.nombre')
                    ->get();
   return view('nomina.index', ['jornadas'=>$jornadas,'fecha_desde' => $fecha_desde,'fecha_hasta' => $fecha_hasta]);
                  }
       return view('nomina.index');
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


       public function downloadPDF(Request $request){

        $jornadas = Jornada::all();
      //  $fecha_desde = $request->input('fecha_desde');
      //  $fecha_hasta = $request->input('fecha_hasta');
        $jornadas= DB::table('jornada')
                    ->join('empleado', 'jornada.empleado_id', '=', 'empleado.idempleado')
                    ->select('jornada.empleado_id','empleado.nombre', 'empleado.apellidos',
                                DB::raw('SUM(jornada.incentivo) as incent,
                                count(jornada.idjornada)*empleado.salario_dia as salario,
                                sum(jornada.extra) as extra,
                                round((count(jornada.idjornada)*empleado.salario_dia*2.87) / 100, 0) as tss,
                                round((count(jornada.idjornada)*empleado.salario_dia*3.04) / 100, 0) as afs'))
                  //  ->whereBetween('fecha',[$fecha_desde, $fecha_hasta])
                    ->groupBy('jornada.empleado_id')
                    ->orderBy('empleado.nombre')
                    ->get();

        $pdf = PDF::loadView('nomina.nominaPDF', compact('jornadas'));
        return $pdf->download('nomina.pdf');
       }
}
