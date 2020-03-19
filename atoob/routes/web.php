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
    return view('index');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/nun', function () {
    return view('nun');
});
Route::get('/socios-regiones', function () {
    return view('socios-regiones');
});
Route::get('/noticias', function () {
    return view('noticias');
});
Route::get('/comision-directiva', function () {
    return view('comision-directiva');
});
