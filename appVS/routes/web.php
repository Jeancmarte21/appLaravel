<?php
#DAME % QUE VOY A SALIR DEL CURSO A SALUDAR A ALGUIEN XD ahha dale
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
    return view('welcome');
});

//Route::group(['prefix' => 'admin'], function() {


Route::resource('empleados', 'EmpleadosController');
#Route::post( 'empleados/create', 'EmpleadosController@create' );
Route::resource('suplidores','SuplidoresController');
Route::resource('cigarros' , 'CigarrosController');
Route::resource('materiasPrimas', 'MateriasPrimasController');
Route::resource('configuraciones' , 'ConfiguracionesController');
Route::resource('maquinas', 'MaquinasController');
Route::resource('jornadas', 'JornadasController');
Route::resource('entradas', 'EntradasController');
Route::resource('produccionesmaquinas', 'ProduccionesMaquinasController');
Route::resource('entradas','EntradasController');
Route::resource('users', 'UsersController');


//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
