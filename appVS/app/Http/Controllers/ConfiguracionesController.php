<?php

namespace appVS\Http\Controllers;

use appVS\Salida;
use appVS\ProduccionMaquina;
use appVS\Maquina;
use appVS\Configuracion;
use appVS\ConfiguracionMateriaPrima;
use appVS\Cigarro;
use appVS\MateriaPrima;
use DB;
use Illuminate\Http\Request;
use appVS\Http\Requests\StoreConfiguracionRequest;

class ConfiguracionesController extends Controller
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
        $cigarros = Cigarro::all();
        $materiasprimas = DB::table('materiaPrima')->where('categoria', 'like', 'Tabaco')->get();
        $saborizante = DB::table('materiaPrima')->where('categoria', 'like', 'Saborizante')->get();
        $tripa = DB::table('materiaPrima')->where('categoria', 'like', 'Tripa')->get();
        $pega = DB::table('materiaPrima')->where('categoria', 'like', 'Pega')->get();
        $configuraciones = Configuracion::all();
        return view('configuraciones.index', ['configuraciones'=> $configuraciones,'materiasprimas' => $materiasprimas, 'cigarros' => $cigarros, 'saborizante' => $saborizante, 'tripa' => $tripa, 'pega'=>$pega]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cigarros = Cigarro::all();
        $configuraciones = Configuracion::all();
        $materiasprimas = DB::table('materiaPrima')->where('categoria', 'like', 'Tabaco')->get();
        return  view('configuraciones.create', ['configuraciones'=> $configuraciones, 'materiasprimas' => $materiasprimas, 'cigarros' => $cigarros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConfiguracionRequest $request)
    {
        $cigarro = Cigarro::find($request->input('cigarro'));
       if(strcmp($cigarro->tipo,'Fumas AMF') == 0){
       $configuracion = Configuracion::create([
                'cigarro_id' => $request -> input('cigarro'),
                'nombre' => $request->input('nombre'),
                'fecha' => $request->input('fecha')
                ]);
       $configuracion->save();

       if($configuracion){
            $confmat1 = ConfiguracionMateriaPrima::create([
                'configuracion_id' => $configuracion->idconfiguracion,
                'materiaprima_id'  => $request -> input('capa'),
                'cantidad' =>         $request -> input('cantidadcapa'),
                'envoltura' => 2
                ]);
            $confmat1->save();
            $confmat2 = ConfiguracionMateriaPrima::create([
                'configuracion_id' => $configuracion->idconfiguracion,
                'materiaprima_id'  => $request -> input('capote'),
                'cantidad' =>         $request -> input('cantidadcapote'),
                'envoltura' => 1
                ]);
            $confmat2->save();
            $confmat3 = ConfiguracionMateriaPrima::create([
                'configuracion_id' => $configuracion->idconfiguracion,
                'materiaprima_id'  => $request -> input('relleno'),
                'cantidad' =>         $request -> input('cantidadrelleno'),
                'envoltura' => 0
                ]);
            $confmat3->save();
           return redirect()->route('configuraciones.index', ['configuracion'=>$configuracion])->with('success', 'Configuracion creado correctamente');
        }
       return back()->withInput();
        }

        else {
            $configuracion = Configuracion::create([
                'cigarro_id' => $request -> input('cigarro'),
                'nombre' => $request->input('nombre'),
                'fecha' => $request->input('fecha')
                ]);
       $configuracion->save();

       if($configuracion){
            $confmat2 = ConfiguracionMateriaPrima::create([
                'configuracion_id' => $configuracion->idconfiguracion,
                'materiaprima_id'  => $request -> input('capote'),
                'cantidad' =>         $request -> input('cantidadcapote'),
                'envoltura' => 1
                ]);
            $confmat2->save();
            $confmat3 = ConfiguracionMateriaPrima::create([
                'configuracion_id' => $configuracion->idconfiguracion,
                'materiaprima_id'  => $request -> input('relleno'),
                'cantidad' =>         $request -> input('cantidadrelleno'),
                'envoltura' => 0
                ]);
            $confmat3->save();
           return redirect()->route('configuraciones.show', ['configuracion'=>$configuracion])->with('success', 'Configuracion creado correctamente');
        }
       return back()->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function show($configuracion)
    {
       // $configuracion = Configuracion::find($configuracion->idconfiguracion);
       // return view('configuraciones.show', ['configuracion'=>$configuracion]);
        $configuracion = Configuracion::find($configuracion);
        //$materiasprima = $configuracion->materiasprimas;
        return view("configuraciones.show",['configuracion'=>$configuracion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Configuracion $configuracion)
    {
      $Configuracion = Configuracion::find($configuracion->idconfiguracion);
      $cigarros = Cigarro::all();
      $materiasprimas = MateriaPrima::all();

       return view('configuraciones.edit',['configuracion'=>$configuracion, 'cigarros' => $cigarros, 'materiasprimas' => $materiasprimas]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuracion $configuracion)
    {
        $configuracionUpdate = Configuracion::find($configuracion)
          ->update([
            'fecha' => $request->input('fecha'),
            'nombre' => $request -> input('nombre'),
            'cigarro_id' => $request -> input('cigarro'),



        ]);

        if($configuracionUpdate){
            return redirect()->route('configuraciones.show', ['configuracion'=>$configuracion])->with('success', 'Configuracion editada correctamente');
        }
        return back()->withInput()->with('errors', 'Hubo algun error en registro de la Configuracion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function destroy($configuracion)
    {
      $config = Configuracion::find($configuracion);
      if($config->delete()){
          return redirect()->route('configuraciones.index')
          ->with('success', 'Configuracion borrada!!');
      }
      return back()->with('errors', 'No se pudo borrar la configuracion');
    }


    public function rendimiento(Request $request){

    //$today = date('Y-m-d H:i:s');
    $configuraciones= DB::table('produccionMaquina')
                ->join('configuracion', 'produccionMaquina.configuracion_id', '=', 'configuracion.idconfiguracion')
                ->join('configuracionMateriaPrima', 'configuracion.idconfiguracion', '=', 'configuracionMateriaPrima.configuracion_id')
                ->join('cigarro', 'configuracion.cigarro_id', '=', 'cigarro.idcigarro')
                ->join('materiaPrima', 'configuracionMateriaPrima.materiaprima_id', '=', 'materiaPrima.idmateriaPrima')
                ->select('materiaPrima.nombre','configuracionMateriaPrima.cantidad as libra','produccionMaquina.cantidad', 'configuracionMateriaPrima.envoltura', DB::raw("SUM(configuracionMateriaPrima.cantidad) as total_libras, SUM(produccionMaquina.cantidad) as total_cigarros, round(SUM(produccionMaquina.cantidad)/SUM(configuracionMateriaPrima.cantidad), 0) as rendimiento, EXTRACT(WEEK from produccionMaquina.fecha) as semana, EXTRACT(MONTH from produccionMaquina.fecha) as mes"))
                ->where([
                    ['cigarro.tipo', 'like', 'Fumas AMF'],
                    ['configuracionMateriaPrima.envoltura', '>=', '1'],
                    ])
                ->whereBetween('produccionMaquina.fecha', ['2017-10-01 00:00:01', '2017-12-31 23:59:00'])
                ->groupBy('mes','semana','materiaPrima.nombre', 'configuracionMateriaPrima.envoltura')
                ->get();

return view('rendimiento', ['configuraciones' => $configuraciones]);
}


}
