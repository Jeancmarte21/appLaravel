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

Route::get('/nominas.index','NominasController@index');
Route::get('/nominasdownloadPDF','NominasController@downloadPDF');

Route::get('/rendimiento.index','RendimientosController@index');
Route::get('/rendimientosdownloadPDF','RendimientosController@downloadPDF');

Route::get('/costoUnitario.index','ProduccionesMaquinasController@costoUnitario');
Route::get('/costoUnitariosdownloadPDF','ProduccionesMaquinasController@downloadPDF');

/*Rutas PDF*/


/*Rutas Reportes*/
Route::get('/inventarios','MateriasPrimasController@inventario');

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
Route::resource('nomina', 'NominasController');
Route::resource('rendimiento','RendimientosController');
Route::resource('costoUnitario','CostoUnitarioController');
/*Views & Controllers*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('/home');
