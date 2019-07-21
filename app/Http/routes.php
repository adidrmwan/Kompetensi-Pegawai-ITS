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

/* Admin Route */
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role:admin']], function(){
		
});
Route::resource('admin',									'AdminController');
Route::resource('jenis-sertifikat',							'Setting\JenisSertifikatController');
Route::resource('bidang',									'Setting\BidangController');
Route::resource('lingkup',									'Setting\LingkupController');
Route::resource('topic',									'TopicController');
Route::resource('question',									'QuestionController');
/* End of Admin Route */


/* Pegawai Route */
Route::group(['prefix' => 'pegawai', 'middleware' => ['auth','role:pegawai']], function(){
		Route::get('data-sertifikat', 						'SertifikatController@getData')->name('sertifikat.data');
		
});
Route::resource('sertifikat',								'SertifikatController');
Route::resource('pegawai',									'PegawaiController');
/* End of Pegawai Route */


/* Pemimpin Route */
Route::group(['prefix' => 'pemimpin','middleware' => ['auth','role:pemimpin']], function(){
	    Route::get('sertifikat', 							'VerifikasiSertifikatController@index')->name('pemimpin.sertifikat');
	    Route::get('sertifikat/{sertifikat}', 							'VerifikasiSertifikatController@show')->name('pemimpin.sertifikat.show');
	    Route::get('sertifikat/approve/{sertifikat}', 		'VerifikasiSertifikatController@approve')->name('pemimpin.approve');
	    Route::get('sertifikat/reject/{sertifikat}', 		'VerifikasiSertifikatController@reject')->name('pemimpin.reject');
});
Route::resource('pemimpin',									'PemimpinController');
/* End of Pemimpin Route */





