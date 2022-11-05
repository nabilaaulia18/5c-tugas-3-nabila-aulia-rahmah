<?php

use App\Http\Controllers\praktek_controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\DashboardController@index');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');
Route::get('/dosen/create', 'App\Http\Controllers\DosenController@create');
Route::get('/dosen', 'App\Http\Controllers\DosenController@index');
Route::post('/dosenInsert', 'App\Http\Controllers\DosenController@insert');
Route::get('dosendelete/{id}', 'App\Http\Controllers\DosenController@delete');
Route::post('/dosenUpdate/{id}', 'App\Http\Controllers\DosenController@update');
Route::get('/dosenEdit/{id}', 'App\Http\Controllers\DosenController@edit');
Route::get('/create', 'App\Http\Controllers\DosenController@create');
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
Route::post('/mahasiswaInsert', 'App\Http\Controllers\MahasiswaController@insert');
Route::get('/mahasiswadelete/{id}', 'App\Http\Controllers\MahasiswaController@delete');
Route::post('/mahasiswaUpdate/{id}', 'App\Http\Controllers\MahasiswaController@update');
Route::get('/mahasiswaEdit/{id}', 'App\Http\Controllers\MahasiswaController@edit');
Route::get('/mahasiswaCreate', 'App\Http\Controllers\MahasiswaController@create');
Route::get('/matkul', 'App\Http\Controllers\MatkulController@index');
Route::post('/matkulInsert', 'App\Http\Controllers\MatkulController@insert');
Route::get('/matkuldelete/{id}', 'App\Http\Controllers\MatkulController@delete');
Route::post('/matkulUpdate/{id}', 'App\Http\Controllers\MatkulController@update');
Route::get('/matkulEdit/{id}', 'App\Http\Controllers\MatkulController@edit');
Route::get('/matkulCreate', 'App\Http\Controllers\MatkulController@create');
