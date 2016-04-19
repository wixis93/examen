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

Route::get('/nuevousr', function () {
    return view('nueusr');
});

Route::get('/ingresar', function () {
    return view('login');
});
Route::get('/mascota', function () {
    return view('mascota');
});
Route::get('/index1', function () {
    return view('cuerpo');
});
Route::get('/index','mascotaController@index');


Route::post('/login', 'loginController@store');
Route::get('/mascotas','mascotaController@index');
Route::post('/registro', 'registrarController@store');
Route::post('/regmas', 'mascotaController@store');
Route::get('/mascota{id}','mascotaController@show');

Route::get('/logout', 'loginController@logout1');

