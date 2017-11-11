<?php

namespace appVS\Http\Controllers;

use appVS\Jornada;
use appVS\Empleado;
use appVS\Maquina;
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
            $jornad=DB::table('jornada')->join('empleado', 'jornada.empleado_id', '=', 'empleado.idempleado')
            ->join('maquina', 'jornada.maquina_id', '=', 'maquina.idmaquina')
            ->select('jornada.*', 'empleado.nombre', 'empleado.apellidos', 'maquina.nombre as maquina')->where('empleado.nombre','LIKE','%'.$query.'%')
            ->orderBy('fecha','desc')
            ->paginate(10);
            return view('jornadas.index',["jornad"=>$jornad,"searchText"=>$query]);
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
    public function store(Request $request)
    {
       $jornada = Jornada::create([
                'maquina_id' => $request -> input('maquina'),
                'empleado_id' => $request -> input('empleado'),
                'incentivo' => $request->input('incentivo'),
                'hora_extra' => $request->input('hora_extra'),
                'fecha' => $request->input('fecha'),
                
                ]);
       $jornada ->save();

        return back()->with('success', 'Jornada creado correctamente');
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
    public function destroy($idjornada)
    {
       $jornada=Jornada::findOrFail($idjornada);
        $jornada=delete();


        return Redirect::to('jornadas.index');
    }
}
