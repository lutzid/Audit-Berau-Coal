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

Route::get('/createagenda', 'AgendaController@createAgenda');

Route::post('/post_agenda', 'AgendaController@submitAgenda');

Route::get('/laporanfull', function () {
	return view('pages.laporanfull');
});

Route::get('/laporanlimit', function () {
	return view('pages.laporanlimit');
});

Route::get('/checklist', function () {
	return view('pages.checklist');
});

Route::get('/coba', function () {
	return view('pages.coba');
});

Route::get('/plor', function () {
	return view('pages.plor');
});