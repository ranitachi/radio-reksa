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
Route::get('coba', 'FrontController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//tentang kami
Route::get('sejarah', 'FrontController@sejarah')->name('sejarah');
Route::get('visi-misi', 'FrontController@visi_misi')->name('visi-misi');
Route::get('kontak', 'FrontController@kontak')->name('kontak');
//Penyiar
Route::get('penyiar/{id?}', 'FrontController@penyiar')->name('penyiar');

//Info
Route::get('info/{kategori?}/{judul?}', 'FrontController@info')->name('info');

//Program
Route::get('program/{judul?}', 'FrontController@program')->name('program');

//event-promo
Route::get('event-promo/{jenis?}/{judul?}', 'FrontController@event_promo')->name('event-promo');

//Galeri
Route::get('galeri-foto', 'FrontController@foto')->name('foto');
Route::get('galeri-video', 'FrontController@video')->name('video');
