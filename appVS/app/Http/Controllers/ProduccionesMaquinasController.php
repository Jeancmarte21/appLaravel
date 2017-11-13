<?php

namespace appVS\Http\Controllers;

use appVS\ProduccionMaquina;
use Illuminate\Http\Request;
use appVS\Configuracion;
use appVS\Maquina;
use appVS\Cigarro;
use DB;

class ProduccionesMaquinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     /* if ($request)
     {
         $query=trim($request->get('searchText'));
         $produccionMaq=DB::table('produccionMaquina')
         ->join('cigarro', 'produccionMaquina.cigarro_id', '=', 'cigarro.idcigarro')
         ->join('maquina', 'produccionMaquina.maquina_id', '=', 'maquina.idmaquina')
         ->join('configuracion','produccionMaquina.configuracion_id','=','configuracion.idconfiguracion')
         ->select('produccionMaquina.*', 'cigarro.nombre', 'maquina.nombre as maquina','configuracion.nombre as configuracion')->where('cigarro.nombre','LIKE','%'.$query.'%')
         ->orderBy('maquina.nombre','desc')
         ->paginate(10);
         return view('produccionesMaquinas.index',["produccionMaq"=>$produccionMaq,"searchText"=>$query]);
     }

        //return view('produccionesmaquinas.index');

        */

        $produccionMaq = ProduccionMaquina::all();
        return view('produccionesmaquinas.index', ['produccionMaq' => $produccionMaq]);
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
    public function store(Request $request)
    {

            $produccionMaquina = ProduccionMaquina::create([
                'maquina_id' => $request->input('maquina'),
                'cigarro_id' => $request->input('cigarro'),
                'configuracion_id' => $request->input('configuracion'),
                'cantidad' => $request->input('cantidad'),
                //'fecha' => $request->input('fecha')
                'fecha' => date('Y-m-d H:i:s')
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
    public function update(Request $request, $produccionMaquina)
    {
        //
        $prodmaqUpdate = ProduccionMaquina::find($produccionMaquina)
            ->update([
            'maquina_id' => $request->input('maquina'),
            'cigarro_id' => $request->input('cigarro'),
            'configuracion_id' => $request->input('configuracion'),
            'cantidad' => $request->input('cantidad'),
            'fecha' => $request->input('fecha')
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
}
