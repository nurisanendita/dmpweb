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
    return view('welcome');
});

Route::get('/dokumentasi', function () {
    return view('dokumentasi.dokumentasi');
});

Route::get('/berita', function () {
    return view('berita.berita');
});

Route::get('/tentang_kami', function () {
    return view('profil.profil');
});

Route::get('/kontak', function () {
    return view('kontak.kontak');
});




Route::get('/agenda_index', 'AgendaController@index');
Route::get('/agenda_create', 'AgendaController@create');
Route::post('/agenda_store', 'AgendaController@store');
Route::get('/agenda_edit/{id}', 'AgendaController@edit');
Route::put('/agenda_update/{id}', 'AgendaController@update');
Route::get('/agenda_delete/{id}', 'AgendaController@destroy');

Auth::routes();

Route::get('/admin_dmp', 'HomeController@index');
