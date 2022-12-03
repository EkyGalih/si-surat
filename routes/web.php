<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function(){
	Route::get('welcome', function () {
		return view('welcome');
	});
	Route::get('tes', function () {
		return view('tes');
	});
	Route::get('layout', function () {
		return view('layout');
	});
	Route::get('bantuan', function () {
		return view('help');
	});
	Route::resource('suratUndangan', 'UndanganController');
	Route::get('ubahUndangan/{id}', 'UndanganController@ubahUndangan');
	Route::put('updateUndangan/{id}', 'UndanganController@updateUndangan');
	// Route::resource('surat', 'SuratController');
	Route::get('ubahSuratMasuk/{id}', 'SuratMasukController@ubahSuratMasuk');
	Route::put('updateSuratMasuk/{id}', 'SuratMasukController@updateSuratMasuk');
	Route::resource('distribusi', 'DistribusiController');
	Route::get('distribusiUndangan', 'DistribusiController@undangan');
	Route::get('createUndangan', 'DistribusiController@createUndangan');
	Route::post('procUndangan', 'DistribusiController@storeUndangan');
	Route::get('editUndangan/{id}', 'DistribusiController@editUndangan');
	Route::put('updateUndanganDistribusi/{id}', 'DistribusiController@updateUndangan');
	Route::resource('suratmasuk', 'SuratMasukController');
	Route::resource('disposisi', 'DisposisiController');
	Route::get('disposisiUndangan', 'DisposisiController@createUndangan');
	Route::get('disposisiSmUmum', 'DisposisiController@createSmUmum');
	Route::resource('filesk', 'FileskController');
	Route::get('uploadNoSurat/{id}', 'FileskController@uploadNoSurat');
	Route::get('switch_filesk/{id}', 'FileskController@switchStatus');
	Route::get('swicth_status_umum/{id}', 'SuratMasukController@switchStatus');
	Route::get('swicth_status_undangan/{id}', 'UndanganController@switchStatus');
	Route::get('switch_distribusi/{id}', 'DistribusiController@switchStatus');
	Route::resource('skbws', 'SksbwsController');
	Route::resource('sksatker', 'SksatkerController');
	Route::resource('sksppd', 'SksppdController');
	Route::resource('sksppdttl', 'SksppdttlController');
	Route::resource('sksppkttl', 'SksppkttlController');
	Route::resource('sms', 'SmsController');
	Route::resource('user', 'UserController');
	Route::get('profile', 'UserController@profile');
	Route::get('cetakUndangan', 'PDFController@undangan');
	Route::post('reportUndangan', 'PDFController@getPDFUndangan');
	Route::get('cetakSuratMasuk', 'PDFController@SuratMasuk');
	Route::post('reportSuratMasuk', 'PDFController@getPDFSuratMasuk');
	Route::get('cetakSkbws', 'PDFController@Skbws');
	Route::post('reportSkbws', 'PDFController@getPDFSkbws');
	Route::get('cetakSksatker', 'PDFController@Sksatker');
	Route::post('reportSksatker', 'PDFController@getPDFSksatker');
	Route::get('cetakSksppd', 'PDFController@Sksppd');
	Route::post('reportSksppd', 'PDFController@getPDFSksppd');
	Route::get('cetakSksppdttl', 'PDFController@Sksppdttl');
	Route::post('reportSksppdttl', 'PDFController@getPDFSksppdttl');
	Route::get('cetakSksppkttl', 'PDFController@Sksppkttl');
	Route::post('reportSksppkttl', 'PDFController@getPDFSksppkttl');
	Route::get('reset_pass/{id}', 'UserController@resetPass');
	Route::put('changePass/{id}', 'UserController@changePass');
	Route::put('changeFoto/{id}', 'UserController@ChangePhoto');
	Route::get('register', function () {
		return view('auth.register');
	});
	Route::get('logout', 'AuthController@logout');	
});
Route::group(['middleware' => 'guest'], function(){
	Route::get('login', 'AuthController@login');
});
Route::get('/', function () {
	return view('beranda');
});
Route::post('login', 'AuthController@postLogin');

Route::get('get_notif_filesk', 'FileskController@getNotifFilesk');
Route::get('get_notif_dist', 'DistribusiController@getNotifDist');
Route::get('get_notif_dist_und', 'DistribusiController@getNotifDistUnd');
Route::get('get_notif_filesk_client', 'FileskController@getNotifFileskClient');
Route::get('get_notif_smumum', 'SuratMasukController@getNotifSmumum');
Route::get('get_notif_smumum_agendaris', 'SuratMasukController@getNotifSmumumAgendaris');
Route::get('get_notif_smund', 'UndanganController@getNotifSmund');
Route::get('get_notif_smund_agendaris', 'UndanganController@getNotifSmundAgendaris');