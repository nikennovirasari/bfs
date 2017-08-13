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

Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiController@index');

Route::group(['middleware'=>'AuthentifikasiUser'],function()
{
	Route::get('search','searchController@awal');
	Route::get('searchresult','searchController@search');

	Route::get('user','UsersController@awal');
	Route::get('user/tambah','UsersController@tambah');
	Route::get('user/{user}','UsersController@lihat');
	Route::post('user/simpan','UsersController@simpan');
	Route::get('user/edit/{user}','UsersController@edit');
	Route::post('user/edit/{user}','UsersController@update');
	Route::get('user/hapus/{user}','UsersController@hapus');

	Route::get('peraturan','PeraturanController@awal');
	Route::get('peraturan/tambah','PeraturanController@tambah');
	Route::get('peraturan/{peraturan}','PeraturanController@lihat');
	Route::post('peraturan/simpan','PeraturanController@simpan');
	Route::get('peraturan/edit/{peraturan}','PeraturanController@edit');
	Route::post('peraturan/edit/{peraturan}','PeraturanController@update');
	Route::get('peraturan/hapus/{peraturan}','PeraturanController@hapus');

	Route::get('jenis','JenisController@awal');
	Route::get('jenis/tambah','JenisController@tambah');
	Route::get('jenis/{jenis}','JenisController@lihat');
	Route::post('jenis/simpan','JenisController@simpan');
	Route::get('jenis/edit/{jenis}','JenisController@edit');
	Route::post('jenis/edit/{jenis}','JenisController@update');
	Route::get('jenis/hapus/{jenis}','JenisController@hapus');
});