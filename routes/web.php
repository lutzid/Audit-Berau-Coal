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

Route::get('/createrencana', 'RencanaController@create');

Route::post('/post_rencana', 'RencanaController@store');

Route::get('/approverAM/{id}', 'RencanaController@approverAM');

Route::get('/approverGM/{id}', 'RencanaController@approverGM');

Route::get('/agenda', 'AgendaController@index');

Route::get('/createagenda', 'AgendaController@create');

Route::post('/post_agenda', 'AgendaController@store');

Route::get('/approveAM/{id}', 'AgendaController@approveAM');

Route::get('/approveGM/{id}', 'AgendaController@approveGM');

Route::get('/approve/{id}', 'AgendaController@approve');

// Route::get('/approve/{id}/{approver}', [
// 	'as' => 'approve', 'uses' => 'AgendaController@approve']);

Route::get('/plor', 'PlorController@index');

Route::get('/createplor', 'PlorController@create');

Route::get('/editplor/{id}', 'PlorController@viewEdit');

Route::post('/edit_plor/{id}', 'PlorController@edit');

Route::get('/monitoring', 'PlorController@monitor');

Route::post('/post_plor', 'PlorController@store');

Route::get('/approvePlor/{id}', 'PlorController@approve');

Route::get('/approvePJO/{id}', 'PlorController@approvePJO');

Route::get('/approveFinal/{id}', 'PlorController@approveFinal');

Route::get('/fillAuditee/{id}', 'PlorController@fillAuditee');

Route::get('/fillOverdue/{id}', 'PlorController@fillOverdue');

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