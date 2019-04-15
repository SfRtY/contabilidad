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
Route::post('/doc/{IdInscripcion}','DocController@example');
Route::get('/formulario','HomeController@formulario')->name('formulario');
Route::get('/eliminar','HomeController@eliminar')->name('eliminar');
Route::get('/prueba','HomeController@prueba')->name('prueba');
Route::get('/resultado','HomeController@resultado')->name('resultado');
Route::get('/reporte','HomeController@reporte')->name('reporte');
Route::get('/modificar','HomeController@modificar')->name('modificar');
Route::get('/eliminar','HomeController@eliminar')->name('eliminar');
Route::get('/modificarp','HomeController@modificarp')->name('modificarp');
Route::get('/buscarp','HomeController@buscarp')->name('buscarp');
Route::get('/home','HomeController@index');

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/dc','HomeController@doc');
/*
Route::get('/formulario', function(){
    return view('form');
});
Route::get('/eliminar',function(){
    return view('delete');
});
Route::get('/prueba',function(){
    return view('prueba');
});
Route::get('/resultado',function(){
    return view('answer');
});
Route::get('/modificar',function(){
    return view('update');
});
Route::get('/eliminar',function(){
    return view('delete');
});
Route::get('/modificarp',function(){
    return view('prueba');
});
Route::get('/buscarp',function(){
    return view('search');
});
*/
Route::get('/UsuarioReporte','Inscripcion@Report')->name('Reporte');
Route::get('/registrar','Inscripcion@Registrar');
Route::get('/lista','Inscripcion@Listar');
Route::get('/BuscarDni','Inscripcion@BuscarDni');
Route::get('/BuscarId','Inscripcion@BuscarId');
Route::get('/actualizar/{IdIncripcion}','Inscripcion@Actualizar');
Route::get('/eliminar/{IdIncripcion}','Inscripcion@Delete');
Route::get('/modificar/{IdInscripcion}','Inscripcion@Show');
Auth::routes();

/*Route::get('/home',function(){
    return view('form');
});*/
