<?php

namespace appVS\Http\Controllers;
use Illuminate\Http\Request;
//use appVS\HTTP\Request;
use appVS\HTTP\Controllers\Controller;
use appVS\User;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

/*public function __construct(){

$this->middleware('auth');
$this->beforeFilter('@findUser',['only'=>['show','edit','update','destroy']]);


}*/

public function __construct()
{
    $this->middleware('auth');
}

    public function index(Request $request)
    {

    //  $request->user()->authorizeRoles(['user','admin']);

      $users = User::orderBy('id','desc')->paginate(10);
      return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new User($request->all());
        $user= save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      $user = User::find($user->id);
      return view('admin.users.show', ['user'=>$user]);
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
    public function destroy(User $user)
    {
      $users = User::find($user->id);
      if($users->delete()){
          return redirect()->route('users.index')
          ->with('success', 'Usuario borrado correctamente');
      }
      return back()->with('errors', 'No se pudo borrar el Usuario');
    }


}
