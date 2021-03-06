<?php

namespace appVS\Http\Controllers;

use appVS\ProduccionMaquina;
use Illuminate\Http\Request;
use appVS\Configuracion;
use appVS\Maquina;
use appVS\Cigarro;
use appVS\Http\Requests\StoreProduccionMaquinaRequest;
use DB;

class ProduccionesMaquinasController extends Controller
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

        $configuraciones = Configuracion::all();
        $maquinas = Maquina::all();
        $cigarros = Cigarro::all();
        $produccionMaq = ProduccionMaquina::all();

        if ($request)
        {
            $query=trim($request->get('searchText'));
            $produccionesmaquinas=DB::table('produccionMaquina')
            ->join('maquina', 'produccionMaquina.maquina_id', '=', 'maquina.idmaquina')
            ->select('produccionMaquina.maquina_id','maquina.nombre')
            ->where('maquina.nombre','LIKE','%'.$query.'%')
            ->orderBy('idproduccionmaquina','desc')
            ->paginate(7);
            return view('produccionesmaquinas.index',['produccionMaq' => $produccionMaq,'configuraciones' => $configuraciones, 'maquinas' => $maquinas,'cigarros' => $cigarros,"searchText"=>$query]);
        }

        return view('produccionesmaquinas.index', ['produccionMaq' => $produccionMaq, 'configuraciones' => $configuraciones, 'maquinas' => $maquinas, 'cigarros' => $cigarros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $configuraciones = Configuracion::all();
        $maquinas = Maquina::all();
        $cigarros = Cigarro::all();
        return view('produccionesmaquinas.create', ['configuraciones' => $configuraciones, 'maquinas' => $maquinas, 'cigarros' => $cigarros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduccionMaquinaRequest $request)
    {

            $produccionMaquina = ProduccionMaquina::create([
                'maquina_id' => $request->input('maquina'),
                'cigarro_id' => $request->input('cigarro'),
                'configuracion_id' => $request->input('configuracion'),
                'cantidad' => $request->input('cantidad'),
                //'fecha' => $request->input('fecha')
                'fecha' => date('Y-m-d'),
                'cantidad_sobrante' => $request->input('cantidad_sobrante')
                ]);
            $produccionMaquina->save();

            return back()->with('success', 'Se ha creado la produccion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\ProduccionMaquina  $produccionMaquina
     * @return \Illuminate\Http\Response
     */
    public function show($produccionMaquina)
    {
        //
        /*$produccionMaquina = ProduccionMaquina::find($produccionMaquina->idproduccionmaquina);
        return view('produccionesmaquinas.show', ['produccionMaquina'=>$produccionMaquina]);
        */
        return view('produccionesmaquinas.show',['produccionMaquina'=>ProduccionMaquina::findOrFail($produccionMaquina)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\ProduccionMaquina  $produccionMaquina
     * @return \Illuminate\Http\Response
     */
    public function edit($produccionMaquina)
    {
        //
        $configuraciones = Configuracion::all();
        $maquinas = Maquina::all();
        $cigarros = Cigarro::all();
        return view('produccionesmaquinas.edit',['produccionesmaquinas'=>ProduccionMaquina::findOrFail($produccionMaquina), 'maquinas'=>$maquinas, 'configuraciones'=>$configuraciones, 'cigarros'=>$cigarros]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\ProduccionMaquina  $produccionMaquina
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduccionMaquinaRequest $request, $produccionMaquina)
    {
        //
        $prodmaqUpdate = ProduccionMaquina::find($produccionMaquina)
            ->update([
            'maquina_id' => $request->input('maquina'),
            'cigarro_id' => $request->input('cigarro'),
            'configuracion_id' => $request->input('configuracion'),
            'cantidad' => $request->input('cantidad'),
           // 'fecha' => $request->input('fecha'),
            'cantidad_sobrante' => $request->input('cantidad_sobrante')
            //'fecha' => date('Y-m-d H:i:s')

            ]);
            if($prodmaqUpdate){
                return redirect()->route('produccionesmaquinas.show', ['produccionMaquina'=>$produccionMaquina])->with('success', 'Produccion editada correctamente');
            }
            return back()->withInput()->with('errors', 'Hubo algun error en la editacion de esta Produccion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\ProduccionMaquina  $produccionMaquina
     * @return \Illuminate\Http\Response
     */
    public function destroy($produccionMaquina)
    {
        $prodmaq = ProduccionMaquina::find($produccionMaquina);
        if($prodmaq->delete()){
            return redirect()->route('produccionesmaquinas.index')
            ->with('success', 'Produccion borrada correctamente');
        }
        return back()->with('errors', 'No se pudo borrar la Produccion');

    }

    public function pagoProduccion()
    {
        $prodmaq = ProduccionMaquina::find($produccionMaquina);
        $maquinas = DB::table('produccionMaquina')
                        ->join('maquina', 'produccionMaquina.maquina_id', '=', 'maquina.idmaquina')
                        ->join('jornada', 'produccionMaquina.maquina_id', '=', 'jornada.maquina_id')
                        ->select('ProduccionMaquina.maquina_id', DB::raw('SUM(produccionMaquina.cantidad) as produccion'))
                        ->where('maquina.produccion', '=', 1)
                        ->groupBy('ProduccionMaquina.maquina_id')
                        ->get();
        return back()->with('errors', 'No se pudo borrar la Produccion');

    }


 public function costoUnitario(Request $request)
    {

        $produccionesmaquinas=ProduccionMaquina::all();

    return view('costoUnitario',['produccionesmaquinas' => $produccionesmaquinas]);


  }
}
