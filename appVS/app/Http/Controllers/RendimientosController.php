<?php

namespace appVS\Http\Controllers;

use Illuminate\Http\Request;
use appVS\Salida;
use appVS\ProduccionMaquina;
use appVS\Maquina;
use appVS\Configuracion;
use appVS\ConfiguracionMateriaPrima;
use appVS\Cigarro;
use appVS\MateriaPrima;
use DB;
use appVS\Http\Requests\StoreConfiguracionRequest;
use PDF;

class RendimientosController extends Controller
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

      $configuraciones= DB::table('produccionMaquina')
                  ->join('configuracion', 'produccionMaquina.configuracion_id', '=', 'configuracion.idconfiguracion')
                  ->join('configuracionMateriaPrima', 'configuracion.idconfiguracion', '=', 'configuracionMateriaPrima.configuracion_id')
                  ->join('cigarro', 'configuracion.cigarro_id', '=', 'cigarro.idcigarro')
                  ->join('materiaPrima', 'configuracionMateriaPrima.materiaprima_id', '=', 'materiaPrima.idmateriaPrima')
                  ->select('materiaPrima.nombre','configuracionMateriaPrima.cantidad as libra','produccionMaquina.cantidad', 'configuracionMateriaPrima.envoltura', DB::raw("SUM(configuracionMateriaPrima.cantidad) as total_libras, SUM(produccionMaquina.cantidad) as total_cigarros, round(SUM(produccionMaquina.cantidad)/SUM(configuracionMateriaPrima.cantidad), 0) as rendimiento, EXTRACT(WEEK from produccionMaquina.fecha) as semana, EXTRACT(MONTH from produccionMaquina.fecha) as mes"))
                  ->where([
                      ['cigarro.tipo', 'like', 'Fumas AMF'],
                      ['configuracionMateriaPrima.envoltura', '>=', '4'],
                      ])
                  ->whereBetween('produccionMaquina.fecha',[$fecha_desde, $fecha_hasta])
                  ->groupBy('mes','semana','materiaPrima.nombre', 'configuracionMateriaPrima.envoltura')
                  ->get();

  return view('rendimiento.index', ['configuraciones' => $configuraciones,
  'fecha_desde' => $fecha_desde,'fecha_hasta' => $fecha_hasta]);
}

return view('rendimiento.index');

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
   public function downloadPDF(Request $request)
    {

     $configuraciones  = Configuracion::all();

      $configuraciones= DB::table('produccionMaquina')
                  ->join('configuracion', 'produccionMaquina.configuracion_id', '=', 'configuracion.idconfiguracion')
                  ->join('configuracionMateriaPrima', 'configuracion.idconfiguracion', '=', 'configuracionMateriaPrima.configuracion_id')
                  ->join('cigarro', 'configuracion.cigarro_id', '=', 'cigarro.idcigarro')
                  ->join('materiaPrima', 'configuracionMateriaPrima.materiaprima_id', '=', 'materiaPrima.idmateriaPrima')
                  ->select('materiaPrima.nombre','configuracionMateriaPrima.cantidad as libra','produccionMaquina.cantidad', 'configuracionMateriaPrima.envoltura',
                  DB::raw("SUM(configuracionMateriaPrima.cantidad) as total_libras, SUM(produccionMaquina.cantidad) as total_cigarros,
                  round(SUM(produccionMaquina.cantidad)/SUM(configuracionMateriaPrima.cantidad), 0) as rendimiento, EXTRACT(WEEK from produccionMaquina.fecha) as semana, EXTRACT(MONTH from produccionMaquina.fecha) as mes"))
                  ->where([
                      ['cigarro.tipo', 'like', 'Fumas AMF'],
                      ['configuracionMateriaPrima.envoltura', '>=', '4'],
                      ])
                //  ->whereBetween('produccionMaquina.fecha',[$fecha_desde, $fecha_hasta])
                  ->groupBy('mes','semana','materiaPrima.nombre', 'configuracionMateriaPrima.envoltura')
                  ->get();

                  $pdf = PDF::loadView('rendimiento.rendimientoPDF', compact('configuraciones'));
                  return $pdf->download('rendimiento.pdf');
}

}
