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

Route::get('/', 'AgendaController@show');
Route::get('/dokumentasi', 'DokumentasiController@show');
Route::get('/berita', function () {return view('berita.berita');});
Route::get('/tentang_kami', function () {return view('profil.profil');});
Route::get('/kontak', function () {return view('kontak.kontak');});

// Route::get('/admin_dmp', function () {return view('admin.admin_login');});
// Route::post('/admin_dmpPost', 'AdminController@authenticate');

//Auth::routes();
Route::get('/agenda_index', 'AgendaController@index');
Route::get('/agenda_create', 'AgendaController@create');
Route::post('/agenda_store', 'AgendaController@store');
Route::get('/agenda_edit/{id}', 'AgendaController@edit');
Route::put('/agenda_update/{id}', 'AgendaController@update');
Route::get('/agenda_delete/{id}', 'AgendaController@destroy');

Route::get('/dokumentasi_index', 'DokumentasiController@index');
Route::get('/dokumentasi_create', 'DokumentasiController@create');
Route::post('/dokumentasi_store', 'DokumentasiController@store');
Route::get('/dokumentasi_edit/{id}', 'DokumentasiController@edit');
Route::put('/dokumentasi_update/{id}', 'DokumentasiController@update');
Route::get('/dokumentasi_delete/{id}', 'DokumentasiController@destroy');

Route::get('/quote_index', 'QuoteController@index');
Route::get('/quote_create', 'QuoteController@create');
Route::post('/quote_store', 'QuoteController@store');
Route::get('/quote_edit/{id}', 'QuoteController@edit');
Route::put('/quote_update/{id}', 'QuoteController@update');
Route::get('/quote_delete/{id}', 'QuoteController@destroy');

Route::get('/rekorskrg_index', 'RekorSkrgController@index');
Route::get('/rekorskrg_create', 'RekorSkrgController@create');
Route::post('/rekorskrg_store', 'RekorSkrgController@store');
Route::get('/rekorskrg_edit/{id}', 'RekorSkrgController@edit');
Route::put('/rekorskrg_update/{id}', 'RekorSkrgController@update');
Route::get('/rekorskrg_delete/{id}', 'RekorSkrgController@destroy');

Route::get('/rekortercapai_index', 'RekorTercapaiController@index');
Route::get('/rekortercapai_create', 'RekorTercapaiController@create');
Route::post('/rekortercapai_store', 'RekorTercapaiController@store');
Route::get('/rekortercapai_edit/{id}', 'RekorTercapaiController@edit');
Route::put('/rekortercapai_update/{id}', 'RekorTercapaiController@update');
Route::get('/rekortercapai_delete/{id}', 'RekorTercapaiController@destroy');

//
// Route::get('/admin_dmp', 'HomeController@index');
