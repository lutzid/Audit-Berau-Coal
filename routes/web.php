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

Route::post('/dashboard', function () {
    return view('pages.home');
});

Route::get('/rencana', function () {
	return view('pages.rencana');
});

Route::get('/agenda', function () {
	return view('pages.agenda');
});

Route::get('/createagenda', function () {
	return view('pages.createagenda');
});

Route::get('/laporanfull', function () {
	return view('pages.laporanfull');
});

Route::get('/laporanlimit', function () {
	return view('pages.laporanlimit');
});

Route::get('/checklist', function () {
	return view('pages.checklist');
});