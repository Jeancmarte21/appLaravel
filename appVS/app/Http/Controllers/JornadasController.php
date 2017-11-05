<?php

namespace appVS\Http\Controllers;

use appVS\Jornada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class JornadasController extends Controller
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
            $query=trim($request->get('searchText'));
            $jornadas=DB::table('jornada')->where('fecha','LIKE','%'.$query.'%')
            ->orderBy('empleado_id','desc')
            ->paginate(10);
            return view('jornadas.index',["jornadas"=>$jornadas,"searchText"=>$query]);
        }

    
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
        return view('jornadas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $jornada = Jornada::create([
                'incentivo' => $request->input('incentivo'),
                'fecha' => $request->input('fecha'),
                'comida' => $request->input('comida')
                ]);

       $jornada=new Jornada;
        $jornada->incentivo=$request->get('incentivo');
        $jornada->fecha=$request->get('fecha');
        $jornada->comida=$request->get('comida');
        $jornada->save();
        return Redirect::to('jornadas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function show(Jornada $jornada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function edit(Jornada $jornada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jornada $jornada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Jornada  $jornada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jornada $jornada)
    {
        //
    }
}
