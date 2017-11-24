<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth/login');
});


/*Route::get('/', function () {
    return view('register');
}); */
Route::post('register','UsersController@store');
Route::get('/admin.users.index','UsersController@index');
Route::get('/downloadPDF','UsersController@downloadPDF');

Route::resource('users', 'UsersController');
Route::resource('empleados', 'EmpleadosController');
Route::resource('suplidores','SuplidoresController');
Route::resource('cigarros' , 'CigarrosController');
Route::resource('materiasPrimas', 'MateriasPrimasController');
Route::resource('configuraciones' , 'ConfiguracionesController');
Route::resource('maquinas', 'MaquinasController');
Route::resource('jornadas', 'JornadasController');
Route::resource('entradas', 'EntradasController');
Route::resource('produccionesmaquinas', 'ProduccionesMaquinasController');
Route::resource('entradas','EntradasController');
Route::resource('inicio', 'iniciosController');
Route::resource('salidas','SalidasController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('/home');
