<?php

namespace appVS\Http\Controllers;
use appVS\Suplidor;
use Illuminate\Http\Request;
use appVS\Http\Requests\StoreSuplidorRequest;
use Illuminate\Support\Facades\Auth;
use DB;
use PDF;

class SuplidoresController extends Controller
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
        $suplidores = Suplidor::all();

        if ($request)
        {
            $query=trim($request->get('searchText'));
            $suplidores=DB::table('suplidor')->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('idsuplidor','desc')
            ->paginate(7);
            return view('suplidores.index',["suplidores"=>$suplidores,"searchText"=>$query]);
        }

        return view('suplidores.index', ['suplidores' => $suplidores]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $suplidores =  Suplidor::all();
      return view('suplidores.create', ['suplidores'=> $suplidores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSuplidorRequest $request)
    {
       $suplidor = Suplidor::create([
                'nombre' => $request->input('nombre'),
                'telefono' => $request->input('telefono'),
                'correo' => $request->input('correo'),
                'pais' => $request->input('pais'),
                'direccion' => $request->input('direccion'),
                ]);

           $suplidor->save();

           if($suplidor){
               return back()->with('success', 'Suplidor registrado correctamente!');
           }
           return back()->withInput()->with('errors','Hubo algun error en registro de Suplidor');


    }

    /**
     * Display the specified resource.
     *
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function show($idsuplidor)
    {

      return view("suplidores.show",["suplidor"=>Suplidor::findOrFail($idsuplidor)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function edit($idsuplidor)
    {

        return view("suplidores.edit",["suplidor"=>Suplidor::findOrFail($idsuplidor)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSuplidorRequest $request, $suplidor)
    {
        $suplidorUpdate = Suplidor::find($suplidor)
            ->update([
            'nombre' => $request->input('nombre'),
            'telefono' => $request->input('telefono'),
            'correo' => $request->input('correo'),
             'pais' => $request->input('pais'),
            'direccion' => $request->input('direccion')
            ]);
            if($suplidorUpdate){
                return redirect()->route('suplidores.show', ['suplidor'=>$suplidor])->with('success', 'Suplidor editado correctamente');
            }
            return back()->withInput()->with('errors', 'Hubo algun error en registro de Suplidor');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \appVS\Suplidor  $suplidor
     * @return \Illuminate\Http\Response
     */
    public function destroy($suplidor)
    {
      $sup = Suplidor::find($suplidor);
      if($sup->delete()){
          return redirect()->route('suplidores.index')
          ->with('success', 'Suplidor borrado correctamente');
      }
      return back()->with('errors', 'No se pudo borrar el Suplidor');
    }

    public function downloadPDF(){

     $suplidor =Suplidor::all();
     $pdf = PDF::loadView('suplidores.pdf', compact('suplidor'));
     return $pdf->download('suplidor.pdf');
   }
}
