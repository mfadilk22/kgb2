<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataKGBController;
use App\Http\Controllers\PemberitahuanKGBController;

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

Route::get('/', [BerandaController::class, 'index']);
Route::get('/datakgb', [DataKGBController::class, "index"]);
Route::get('/pemberitahuankgb', [PemberitahuanKGBController::class, 'index']);
Route::view('/login', 'konten.v_login');
