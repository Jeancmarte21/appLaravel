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
    return view('welcome');
});
Route::resource('empleados', 'EmpleadosController');
Route::resource('gestionSuplidores/suplidor','SuplidorController');
Route::resource('gestionEmpleados/empleado','EmpleadoController');
Route::resource('produccion/cigarro','CigarroController');
Route::resource('gestionNomina/nomina','NominaController');
Route::resource('gestionMateriaPrima/materiaPrima','MateriaPrimaController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
