<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('/usuario','UsuarioController')->middleware('auth');
Route::get('/usuario/{id}/changePassword', 'UsuarioController@changePass')->name('changePass')->middleware('auth');
Route::put('/usuario/{id}/setNewPass', 'UsuarioController@setNewPass')->name('setNewPass')->middleware('auth');
Route::resource('/sucursal','SucursalController')->middleware('auth');
Route::resource('/proveedor','ProveedorController')->middleware('auth');
Route::resource('/ubicacion','UbicacionController')->middleware('auth');
Route::resource('/producto','ProductoController')->middleware('auth');
Route::resource('/inventario','InventarioController')->middleware('auth');
Route::resource('/ingreso','IngresoController')->middleware('auth');
Route::resource('/salida','SalidaController')->middleware('auth');
route::get('/pdf', 'PDFController@reporteSucursales')->name('reporteSucursal')->middleware('auth');