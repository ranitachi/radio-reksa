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

// Route::get('/', function () {
    //     return view('welcome');
    // });
Auth::routes();
Route::get('logout', function(){
    Auth::logout();
    return redirect('/beranda');
});
Route::get('/', 'FrontController@index');


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

//-------------BACKEND----------------
// ------------ BACKEND ROUTES -------------------

Route::get('/beranda', 'DashboardController@index')->name('beranda.index');

Route::get('cat-data/{id}', 'CatBeritaController@data')->name('cat_berita.data');
Route::get('cat-form/{id}', 'CatBeritaController@form')->name('cat_berita.form');
Route::resource('cat-berita','CatBeritaController');

Route::resource('berita','BeritaController');
Route::get('berita-data/{id}', 'BeritaController@data')->name('berita.data');
Route::get('berita-form/{id}', 'BeritaController@form')->name('berita.form');
Route::post('berita-status/{id}', 'BeritaController@beritastatus');

Route::resource('jemputzakat','JemputZakatController');
Route::get('jemputzakat-data/{id}', 'JemputZakatController@data')->name('jemputzakat.data');
Route::get('jemputzakat-form/{id}', 'JemputZakatController@form')->name('jemputzakat.form');
Route::post('jemputzakat-status/{id}', 'JemputZakatController@jemputzakatstatus');

Route::resource('konfirmasizakat','KonfirmasiController');
Route::get('konfirmasizakat-data/{id}', 'KonfirmasiController@data')->name('konfirmasi.data');
Route::get('konfirmasizakat-form/{id}', 'KonfirmasiController@form')->name('konfirmasi.form');
Route::post('konfirmasizakat-status/{id}', 'KonfirmasiController@konfirmasistatus');

Route::resource('program','ProgramController');
Route::get('program-data/{id}', 'ProgramController@data')->name('program.data');
Route::get('program-form/{id}', 'ProgramController@form')->name('program.form');
Route::post('program-status/{id}', 'ProgramController@programstatus');

Route::resource('faq','FaqController');
Route::get('faq-data/{id}', 'FaqController@data')->name('faq.data');
Route::get('faq-form/{id}', 'FaqController@form')->name('faq.form');
Route::post('faq-status/{id}', 'FaqController@faqstatus');

Route::resource('pendaftaran','PendaftaranController');
Route::get('pendaftaran-data/{id}', 'PendaftaranController@data')->name('pendaftaran.data');
Route::get('pendaftaran-form/{id}', 'PendaftaranController@form')->name('pendaftaran.form');

Route::resource('rekening','BankController');
Route::get('rekening-data/{id}', 'BankController@data')->name('rekening.data');
Route::get('rekening-form/{id}', 'BankController@form')->name('rekening.form');

Route::resource('bagian','BagianController');
Route::get('bagian-data/{id}', 'BagianController@data')->name('bagian.data');
Route::get('bagian-form/{id}', 'BagianController@form')->name('bagian.form');

Route::resource('event','EventController');
Route::get('event-data/{id}', 'EventController@data')->name('event.data');
Route::get('event-form/{id}', 'EventController@form')->name('event.form');
Route::post('event-status/{id}', 'EventController@eventstatus');

Route::resource('jabatan','JabatanController');
Route::get('jabatan-data/{id}', 'JabatanController@data')->name('jabatan.data');
Route::get('jabatan-form/{id}', 'JabatanController@form')->name('jabatan.form');

Route::resource('user','UserController');
Route::get('user-data/{id}', 'UserController@data')->name('user.data');
Route::get('user-form/{id}', 'UserController@form')->name('user.form');

Route::resource('testimoni','TestimonyController');
Route::get('testimoni-data/{id}', 'TestimonyController@data')->name('testimoni.data');
Route::get('testimoni-form/{id}', 'TestimonyController@form')->name('testimoni.form');

Route::resource('staff','StaffController');
Route::get('staff-data/{id}', 'StaffController@data')->name('staff.data');
Route::get('staff-form/{id}', 'StaffController@form')->name('staff.form');

Route::resource('hubungi-kami','ContactController');
Route::get('hubungi-kami-data/{id}', 'ContactController@data')->name('hubungi-kami.data');
Route::get('hubungi-kami-form/{id}', 'ContactController@form')->name('hubungi-kami.form');

Route::resource('dokumen','SupportingDocController');
Route::get('dokumen-data/{id}', 'SupportingDocController@data')->name('dokumen.data');
Route::get('dokumen-form/{id}', 'SupportingDocController@form')->name('dokumen.form');

Route::resource('video','VideoController');
Route::get('video-data/{id}', 'VideoController@data')->name('video.data');
Route::get('video-form/{id}', 'VideoController@form')->name('video.form');

Route::resource('galeri','GalleryController');
Route::get('galeri-data/{id}', 'GalleryController@data')->name('galeri.data');
Route::get('galeri-form/{id}', 'GalleryController@form')->name('galeri.form');
Route::post('galeri-status/{id}', 'GalleryController@galeristatus');

Route::resource('slider','SliderController');
Route::get('slider-data/{id}', 'SliderController@data')->name('slider.data');
Route::get('slider-form/{id}', 'SliderController@form')->name('slider.form');

Route::resource('kalender','KalenderController');
Route::get('kalender-data/{id}', 'KalenderController@data')->name('kalender.data');
Route::get('kalender-form/{id}', 'KalenderController@form')->name('kalender.form');

Route::resource('sejarah','ProfileCCITController');
Route::resource('kurikulum','ProfileCCITController');
Route::resource('struktur-organisasi','ProfileCCITController');
Route::resource('visi-misi','ProfileCCITController');
Route::resource('tentang','ProfileCCITController');
Route::get('profil-data/{category}', 'ProfileCCITController@data')->name('profil.data');
Route::get('profil-form/{id}/{category}', 'ProfileCCITController@form')->name('profil.form');
// ------------ BACKEND ROUTES -------------------

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    //  \UniSharp\LaravelFilemanager\Lfm::routes();
 });