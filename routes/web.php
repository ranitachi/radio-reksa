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




//tentang kami
Route::get('sejarah', 'FrontController@sejarah')->name('sejarah');
Route::get('visi-misi', 'FrontController@visi_misi')->name('visi-misi');
Route::get('kontak', 'FrontController@kontak')->name('kontak');
//Penyiar
Route::get('penyiar/{id?}', 'FrontController@penyiar')->name('penyiar');

//Info
Route::get('info/{kategori?}/{judul?}', 'FrontController@info')->name('info');
Route::get('addviewinfo/{id}','FrontController@addview');
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
Route::get('/home', 'DashboardController@index')->name('home');
Route::get('cat-data/{id}', 'Backend\CatBeritaController@data')->name('cat_berita.data')->middleware('auth');
Route::get('cat-form/{id}', 'Backend\CatBeritaController@form')->name('cat_berita.form')->middleware('auth');
Route::resource('cat-berita','Backend\CatBeritaController')->middleware('auth');

Route::resource('berita','Backend\BeritaController')->middleware('auth');
Route::get('berita-data/{id}', 'Backend\BeritaController@data')->name('berita.data')->middleware('auth');
Route::get('berita-form/{id}', 'Backend\BeritaController@form')->name('berita.form')->middleware('auth');
Route::post('berita-status/{id}', 'Backend\BeritaController@beritastatus')->middleware('auth');

Route::resource('jemputzakat','JemputZakatController');
Route::get('jemputzakat-data/{id}', 'JemputZakatController@data')->name('jemputzakat.data');
Route::get('jemputzakat-form/{id}', 'JemputZakatController@form')->name('jemputzakat.form');
Route::post('jemputzakat-status/{id}', 'JemputZakatController@jemputzakatstatus');

Route::resource('konfirmasizakat','KonfirmasiController');
Route::get('konfirmasizakat-data/{id}', 'KonfirmasiController@data')->name('konfirmasi.data');
Route::get('konfirmasizakat-form/{id}', 'KonfirmasiController@form')->name('konfirmasi.form');
Route::post('konfirmasizakat-status/{id}', 'KonfirmasiController@konfirmasistatus');

Route::resource('program-radio','Backend\ProgramController')->middleware('auth');
Route::get('program-data/{id}', 'Backend\ProgramController@data')->name('program.data')->middleware('auth');
Route::get('program-form/{id}', 'Backend\ProgramController@form')->name('program.form')->middleware('auth');
Route::post('program-status/{id}', 'Backend\ProgramController@programstatus')->middleware('auth');

Route::resource('faq','FaqController');
Route::get('faq-data/{id}', 'FaqController@data')->name('faq.data');
Route::get('faq-form/{id}', 'FaqController@form')->name('faq.form');
Route::post('faq-status/{id}', 'FaqController@faqstatus');

Route::resource('event','Backend\EventController')->middleware('auth');
Route::get('event-data/{id}', 'Backend\EventController@data')->name('event.data')->middleware('auth');
Route::get('event-form/{id}', 'Backend\EventController@form')->name('event.form')->middleware('auth');
Route::post('event-status/{id}', 'Backend\EventController@eventstatus')->middleware('auth');

Route::resource('promo','Backend\PromoController')->middleware('auth');
Route::get('promo-data/{id}', 'Backend\PromoController@data')->name('promo.data')->middleware('auth');
Route::get('promo-form/{id}', 'Backend\PromoController@form')->name('event.form')->middleware('auth');
Route::post('promo-status/{id}', 'Backend\PromoController@promostatus')->middleware('auth');


Route::resource('user','Backend\UserController');
Route::get('user-data/{id}', 'Backend\UserController@data')->name('user.data');
Route::get('user-form/{id}', 'Backend\UserController@form')->name('user.form');

Route::resource('testimoni','Backend\TestimonyController');
Route::get('testimoni-data/{id}', 'Backend\TestimonyController@data')->name('testimoni.data');
Route::get('testimoni-form/{id}', 'Backend\TestimonyController@form')->name('testimoni.form');

Route::resource('penyiar-radio','Backend\StaffController')->middleware('auth');
Route::get('staff-data/{id}', 'Backend\StaffController@data')->name('staff.data')->middleware('auth');
Route::get('staff-form/{id}', 'Backend\StaffController@form')->name('staff.form')->middleware('auth');

Route::resource('hubungi-kami','Backend\ContactController');
Route::get('hubungi-kami-data/{id}', 'Backend\ContactController@data')->name('hubungi-kami.data');
Route::get('hubungi-kami-form/{id}', 'Backend\ContactController@form')->name('hubungi-kami.form');

Route::resource('video','Backend\VideoController')->middleware('auth');
Route::get('video-data/{id}', 'Backend\VideoController@data')->name('video.data')->middleware('auth');
Route::get('video-form/{id}', 'Backend\VideoController@form')->name('video.form')->middleware('auth');
Route::post('video-status/{id}', 'Backend\VideoController@galeristatus')->middleware('auth');


Route::resource('galeri','Backend\GalleryController')->middleware('auth');
Route::get('galeri-data/{id}', 'Backend\GalleryController@data')->name('galeri.data')->middleware('auth');
Route::get('galeri-form/{id}', 'Backend\GalleryController@form')->name('galeri.form')->middleware('auth');
Route::post('galeri-status/{id}', 'Backend\GalleryController@galeristatus')->middleware('auth');

Route::resource('slider','Backend\SliderController')->middleware('auth');
Route::get('slider-data/{id}', 'Backend\SliderController@data')->name('slider.data')->middleware('auth');
Route::get('slider-form/{id}', 'Backend\SliderController@form')->name('slider.form')->middleware('auth');

Route::resource('kalender','KalenderController');
Route::get('kalender-data/{id}', 'KalenderController@data')->name('kalender.data');
Route::get('kalender-form/{id}', 'KalenderController@form')->name('kalender.form');

Route::resource('sejarah-radio','Backend\ProfilController')->middleware('auth');
Route::resource('visi-misi-radio','Backend\ProfilController')->middleware('auth');
Route::resource('tentang-radio','Backend\ProfilController')->middleware('auth');
Route::get('profil-data/{category}', 'Backend\ProfilController@data')->name('profil.data')->middleware('auth');
Route::get('profil-form/{id}/{category}', 'Backend\ProfilController@form')->name('profil.form')->middleware('auth');
// ------------ BACKEND ROUTES -------------------

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    //  \UniSharp\LaravelFilemanager\Lfm::routes();
 });