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

use Illuminate\Http\Request;
use App\Mail\SendMail;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('old/contact/indexn');
});
Route::get('/thanks', function () {
    return view('old/thanks/indexn');
});
//======= Steps =========
Route::get('/paso-1', function () {
    return view('steps/paso-1');
});

Route::get('/paso-2', 'Services@ShowAll');

Route::get('/paso-3', 'Services@ShowServices');

// Crear proceso
Route::post('/start-process', 'Services@StartProcess');
// Editar proceso
Route::post('/update-process', 'Services@UpdateProcess');
// Enviar email
Route::post('/send-mail-process', 'Services@SendProccesMail');
// Finalizar proceso
Route::post('/end-process', 'Services@EndProcess');

//======= Servicios =======
Route::get('/servicios', function () {
    return view('servicios/index');
});
/***Acerca***/
Route::get('/acerca', function () {
    return view('/acerca/index');
});
/*****Rutas Proyecto*****/
Route::get('/proyectos', function () {
    return view('proyectos/index');
});

Route::get('/proyectos/casa_cinco', function () {
    return view('proyectos/casa_cinco');
});
Route::get('/proyectos/the_beer_store', function () {
    return view('proyectos/the_beer_store');
});
Route::get('/proyectos/laser', function () {
    return view('proyectos/laser');
});
Route::get('/proyectos/truequeria', function () {
    return view('proyectos/truequeria');
});
Route::get('/proyectos/magueyro', function () {
    return view('proyectos/magueyro');
});
Route::get('/proyectos/la_amuse', function () {
    return view('proyectos/la_amuse');
});

/***contacto***/
Route::get('/contacto', function () {
    return view('old/contact/indexn');
});


