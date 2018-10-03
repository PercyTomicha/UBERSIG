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
    return view('index2');
});
Route::get('/index', function () {return view('index');});
Route::get('/loginT', function () {return view('auth.loginT');});
Route::get('/registerT', function () {return view('auth.registerT');});
Route::get('/index2', function () {return view('index2');});
Route::get('/styles', function () {return view('styles');});
Route::resource('usuario','UsuarioController');
Route::resource('propietario','PropietarioController');
Route::resource('chofer','ChoferController');
Route::resource('pasajero','PasajeroController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
