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
//Se define la ruta, lo que se ponga en view ('sera el ...blade.php que se vea')
Route::get('/', function () {
    return view('inicial');
});
Route::get('/editar', function () {
    return view('editar');
});
Route::get('/pf', function () {
    return view('pf');
});
Route::get('/contacto', function () {
    return view('contactos');
});
Route::get('/pix', function () {
    return view('index');
});
Route::get('/pre', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
