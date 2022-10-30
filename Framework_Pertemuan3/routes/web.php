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

Route::get('/', [DashboardController::class, 'index']);


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dosen/create', [DosenController::class, 'create']);


Route::get('/dosen', [DosenController::class, 'index']);
Route::post('/dosenInsert', [DosenController::class, 'insert']);
Route::get('dosendelete/{id}', [DosenController::class, 'delete']);
Route::post('/dosenUpdate/{id}', [DosenController::class, 'update']);
Route::get('/dosenEdit/{id}', [DosenController::class, 'edit']);
Route::get('/create', [DosenController::class, 'create']);


Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswaInsert', [MahasiswaController::class, 'insert']);
Route::get('/mahasiswadelete/{id}', [MahasiswaController::class, 'delete']);
Route::post('/mahasiswaUpdate/{id}', [MahasiswaController::class, 'update']);
Route::get('/mahasiswaEdit/{id}', [MahasiswaController::class, 'edit']);
Route::get('/mahasiswaCreate', [MahasiswaController::class, 'create']);



Route::get('/matkul', [MatkulController::class, 'index']);
Route::post('/matkulInsert', [MatkulController::class, 'insert']);
Route::get('/matkuldelete/{id}', [MatkulController::class, 'delete']);
Route::post('/matkulUpdate/{id}', [MatkulController::class, 'update']);
Route::get('/matkulEdit/{id}', [MatkulController::class, 'edit']);
Route::get('/matkulCreate', [MatkulController::class, 'create']);
