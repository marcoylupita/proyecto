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

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('acerca-de', function () {
    return view('acerca-de');
});

Route::get('catalogo', function () {
    return view('catalogo');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('galeria', function () {
    return view('galeria');
});


Route::resource('posts', 'PostController');


