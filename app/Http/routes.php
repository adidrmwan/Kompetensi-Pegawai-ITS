<?php

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

        Route::resource('admin','AdminController');
		
});

Route::group(['middleware' => ['auth','role:pegawai']], function(){

		Route::resource('pegawai','PegawaiController');

});

Route::group(['middleware' => ['auth','role:pemimpin']], function(){

	    Route::resource('pemimpin','PemimpinController');

});



