<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('index');
});
Route::resource('log', 'logController');
Route::get('logout', 'LogController@logout');
Route::resource('usuario','UsuarioController');
Route::resource('roles','RolesController');
Route::resource('asignar','AsignarRolController');
Route::resource('sucursal','SucursalController');
Route::resource('material','MaterialController');
Route::resource('material/tipo','TipoMaterialController');
Route::resource('permisos','PermisosController');
Route::resource('asignar-permisos','AsignarPermisosController');
Route::resource('clientes','ClientesController');
Route::resource('clientes/tipos','TipoClientesController');
Route::get('clientes-tipos','TipoClientesController@index');
Route::get('material-tipo','TipoMaterialController@index');
Route::resource('ventas','VentasController');
Route::get('/listado', 'VentasController@autocompletar');
Route::get('/precio', 'VentasController@buscarPrecio');
Route::get('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index']);
Route::post('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index']);
//Route::resource('/gmaps','GmapsController');