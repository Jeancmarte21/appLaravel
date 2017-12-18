<?php

Route::get('/', function () {
    return view('auth/login');
});


/*Rutas PDF*/
Route::get('/materiasPrimas.index','MateriasPrimasController@index');
Route::get('/downloadPDF','MateriasPrimasController@downloadPDF');

Route::get('/suplidores.index','SuplidoresController@index');
Route::get('/suplidoresdownloadPDF','SuplidoresController@downloadPDF');

Route::get('/empleados.index','EmpleadosController@index');
Route::get('/empleadosdownloadPDF','EmpleadosController@downloadPDF');

Route::get('/inventarios.index','MateriasPrimasController@inventario');
Route::get('/inventariodownloadPDF','MateriasPrimasController@idownloadPDF');

Route::get('/nominas.index','JornadasController@nomina');
Route::get('/nominasdownloadPDF','JornadasController@downloadPDF');
/*Rutas PDF*/


/*Rutas Reportes*/
Route::post('/nomina', 'JornadasController@nomina');
Route::get('/prenomina','JornadasController@prenomina');
Route::get('/inventarios','MateriasPrimasController@inventario');
Route::get('/rendimiento','ConfiguracionesController@rendimiento');
Route::get('/costoUnitario','ProduccionesMaquinasController@costoUnitario');
/*Rutas Reportes*/

/*Views & Controllers*/
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
/*Views & Controllers*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('/home');
