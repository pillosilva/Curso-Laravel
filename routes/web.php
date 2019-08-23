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

Route::get('/', 'InicioController@index');
/*para cachear ruta*/


route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
Route::get('permiso', 'PermisoController@index')->name('permiso');
Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
Route::get('menu', 'MenuController@index')->name('menu');
Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
});