<?php

namespace appVS\Http\Controllers;

use appVS\Cigarro;
use appVS\MateriaPrima;
use DB;
use Illuminate\Http\Request;
use appVS\Http\Requests\StoreCigarroRequest;

class CigarrosController extends Controller
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
       return view('cigarros.index', ['cigarros'=> $cigarros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiasprimas = DB::table('materiaPrima')->where('categoria', 'like', 'Saborizante')->get();
        return view('cigarros.create', ['materiasprimas' => $materiasprimas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCigarroRequest $request)
    {
     $cigarro = Cigarro::create([

                'nombre' => $request->input('nombre'),
                'tipo' => $request->input('tipo_cigarro'),
                'saborizante' => $request->input('saborizante')

        ]);
     $cigarro->save();

     if($cigarro){
         return redirect()->route('cigarros.show', ['cigarros'=>$cigarro])->with('success', 'Cigarro creado correctamente');
     }
     return back()->withInput();
 }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Cigarro  $cigarro
     * @return \Illuminate\Http\Response
     */
    public function show($idcigarro)
    {
        /*$cigarro = DB::table('cigarro')
        ->join('materiaPrima', 'cigarro.saborizante', '=', 'materiaPrima.idmateriaPrima')
        ->select('cigarro.*', 'materiaPrima.nombre as aroma')
        ->where('idcigarro', '=', $idcigarro)->get();*/

        $cigarro = Cigarro::find($idcigarro);
      //  $cigarro = Cigarro::find($idcigarro)->
        return view("cigarros.show",["cigarro"=>$cigarro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Cigarro  $cigarro
     * @return \Illuminate\Http\Response
     */
     public function edit($idcigarro)
    {
        $materiasprimas = MateriaPrima::where('categoria', 'like', 'Saborizante')->get();
        $cigarro = Cigarro::find($idcigarro);
        return view('cigarros.edit', ['cigarro'=> $cigarro, 'materiasprimas'=>$materiasprimas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Cigarro  $cigarro
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCigarroRequest $request, $cigarro)
    {
        //
        $cigarroUpdate = Cigarro::find($cigarro)
            ->update([
                'nombre' => $request->input('nombre'),
                'tipo' => $request->input('tipo_cigarro'),
                'saborizante' => $request->input('saborizante')
            ]);
            if($cigarroUpdate){
                return redirect()->route('cigarros.show', ['cigarros'=>$cigarro])->with('success', 'Cigarro editado correctamente');
            }
            return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Cigarro  $cigarro
     * @return \Illuminate\Http\Response
     */
    public function destroy($cigarro)
    {
        //
        $cigarron = Cigarro::find($cigarro);
        if($cigarron->delete()){
            return redirect()->route('cigarros.index')
            ->with('success', 'Cigarro borrado correctamente');
        }
        return back()->with('errors', 'No se pudo borrar el Cigarro');
    }
}
