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

Route::get('/produk', 'PelangganController@produk');
Route::get('/produk/teh', 'PelangganController@indexteh');
Route::get('/produk/teh/cari', 'PelangganController@cariteh');
Route::get('/produk/kopi', 'PelangganController@indexkopi');
Route::get('/produk/kopi/cari', 'PelangganController@carikopi');
Route::get('/manfaat', 'PelangganController@manfaat');
Route::get('/tentang', 'PelangganController@tentang');
Route::get('/kontak', 'PelangganController@kontak');

Route::get('/teh', 'TehController@index');
Route::get('/teh/cari', 'TehController@cari');
Route::get('/teh/create', 'TehController@create');
Route::post('/teh', 'TehController@store');
Route::get('/teh/{id}/edit', 'TehController@edit');
Route::patch('/teh/{id}', 'TehController@update');
Route::delete('/teh/{id}', 'TehController@destroy');

Route::get('/kopi', 'KopiController@index');
Route::get('/kopi/cari', 'KopiController@cari');
Route::get('/kopi/create', 'KopiController@create');
Route::post('/kopi', 'KopiController@store');
Route::get('/kopi/{id}/edit', 'KopiController@edit');
Route::patch('/kopi/{id}', 'KopiController@update');
Route::delete('/kopi/{id}', 'KopiController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

