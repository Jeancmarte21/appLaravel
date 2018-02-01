<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;
use appVS\ProduccionMaquina;
use appVS\Configuracion;
use appVS\Maquina;
use appVS\Cigarro;
use appVS\Http\Requests\StoreProduccionMaquinaRequest;
use DB;
use PDF;

class CostoUnitarioController extends Controller
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
      $costos= DB::table('configuracion')
                  ->join('produccionMaquina', 'configuracion.idconfiguracion', '=','produccionMaquina.configuracion_id')
                  ->join('configuracionMateriaPrima', 'configuracion.idconfiguracion', '=', 'configuracionMateriaPrima.configuracion_id')
                  ->join('cigarro', 'configuracion.cigarro_id', '=', 'cigarro.idcigarro')
                  ->join('materiaPrima', 'configuracionMateriaPrima.materiaprima_id', '=', 'materiaPrima.idmateriaPrima')
                  ->select('materiaPrima.nombre','configuracion.nombre as config','configuracionMateriaPrima.cantidad as libra','produccionMaquina.cantidad', 'configuracionMateriaPrima.envoltura', 'cigarro.nombre as cigarro', DB::raw("
                        SUM(configuracionMateriaPrima.cantidad * materiaPrima.costo) as total_costo,
                        SUM( Distinct produccionMaquina.cantidad) as total_cigarros,
                        
                        EXTRACT(WEEK from produccionMaquina.fecha) as semana,
                        EXTRACT(MONTH from produccionMaquina.fecha) as mes,
                        count(configuracionMateriaPrima.materiaprima_id) as dividendo, 
                        
                        (
                            SUM(configuracionMateriaPrima.cantidad * materiaPrima.costo) / (
                            SUM(DISTINCT produccionMaquina.cantidad) )
                        ) as  rounded "))
                  ->whereBetween('configuracion.fecha',[$fecha_desde, $fecha_hasta])
                  ->groupBy('mes','semana','cigarro.nombre' )
                  ->get();

    /*  $costos= DB::table('configuracion')
                  ->join('produccionMaquina', 'configuracion.idconfiguracion', '=','produccionMaquina.configuracion_id')
                  ->join('configuracionMateriaPrima', 'configuracion.idconfiguracion', '=', 'configuracionMateriaPrima.configuracion_id')
                  ->join('cigarro', 'configuracion.cigarro_id', '=', 'cigarro.idcigarro')
                  ->join('materiaPrima', 'configuracionMateriaPrima.materiaprima_id', '=', 'materiaPrima.idmateriaPrima')
                  ->select('materiaPrima.nombre','configuracion.nombre as config','configuracionMateriaPrima.cantidad as libra','produccionMaquina.cantidad', 'configuracionMateriaPrima.envoltura', 'cigarro.nombre as cigarro', DB::raw("SUM(configuracionMateriaPrima.cantidad * materiaPrima.costo) as total_costo, SUM(produccionMaquina.cantidad) as total_cigarros, EXTRACT(WEEK from produccionMaquina.fecha) as semana, EXTRACT(MONTH from produccionMaquina.fecha) as mes, count(configuracionMateriaPrima.materiaprima_id) as dividendo, round(SUM(configuracionMateriaPrima.cantidad * materiaPrima.costo) / (SUM(produccionMaquina.cantidad) / count(configuracionMateriaPrima.materiaprima_id)),4) as rounded"))
                  ->whereBetween('configuracion.fecha',[$fecha_desde, $fecha_hasta])
                  ->groupBy('mes','semana','cigarro.nombre')
                  ->get();

        $costos = DB::select( "
            SELECT
                materiaPrima.nombre,
                configuracion.nombre as config,
                configuracionMateriaPrima.cantidad as libra,
                produccionMaquina.cantidad, 
                configuracionMateriaPrima.envoltura,
                cigarro.nombre as cigarro
            FROM
        " );*/


  return view('costoUnitario.index',['costos' => $costos, 'fecha_desde' => $fecha_desde, 'fecha_hasta' => $fecha_hasta]);
    }
    return view('costoUnitario.index');

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
}
