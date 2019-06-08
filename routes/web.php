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
    return view('pages.login');
});

Route::post('/login_user', 'UserController@loginUser');

Route::get('/logout_user', 'UserController@logoutUser');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/rencana', 'RencanaController@index');

Route::post('/post_rencana', 'RencanaController@submitRencana');

Route::get('/agenda', 'AgendaController@index');

Route::get('/createagenda', 'AgendaController@create');

Route::post('/post_agenda', 'AgendaController@store');

Route::get('/plor', 'PlorController@index');

Route::post('/post_plor', 'PlorController@submitPlor');

Route::get('/laporanfull', function () {
	return view('pages.laporanfull');
});

Route::get('/laporan', function () {
	return view('pages.viewlaporan');
});

Route::get('/uploadlaporan', function () {
	return view('pages.laporan');
});

Route::get('/checklist', function () {
	return view('pages.viewchecklist');
});

Route::get('/uploadchecklist', function () {
	return view('pages.checklist');
});

Route::get('/coba', function () {
	return view('pages.coba');
});