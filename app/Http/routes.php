<?php
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
Route::get('/', function () {

	if (Auth::check()) {
		return redirect()->route('home');
	}

    return view('welcome');

})->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','role:admin']], function(){

		Route::resource('admin',					'AdminController');

		
});

Route::group(['prefix' => 'pegawai', 'middleware' => ['auth','role:pegawai']], function(){
		Route::get('data-sertifikasi', 				'SertifikasiController@getData')->name('sertifikasi.data');
		
});

Route::group(['prefix' => 'pemimpin','middleware' => ['auth','role:pemimpin']], function(){
	    Route::get('sertifikasi', 					'VerifikasiSertifikatController@index')->name('pemimpin.sertifikasi');
	    Route::get('sertifikasi/approve/{sertifikat}', 		'VerifikasiSertifikatController@approve')->name('pemimpin.approve');
	    Route::get('sertifikasi/reject/{sertifikat}', 		'VerifikasiSertifikatController@reject')->name('pemimpin.reject');

});

Route::resource('sertifikasi',						'SertifikasiController');
Route::resource('pegawai',							'PegawaiController');
Route::resource('pemimpin',							'PemimpinController');
Route::resource('topic',							'TopicController');
Route::resource('question',							'QuestionController');




