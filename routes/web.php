<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataKGBController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\PemberitahuanKGBController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;


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

//ROUTE DI BAWAH KALO BELOM BISA AUTH CONTROLLER
// Route::get('/', [BerandaController::class, 'index'])->name('beranda');
// //Route::get('/', [BerandaController::class, 'selisih_tgl']);
// Route::get('/datakgb', [DataKGBController::class, "index"])->name('datakgb');
// Route::get('/pemberitahuankgb', [PemberitahuanKGBController::class, 'index'])->name('pemberitahuankgb');
// Route::post('/kirim',[PesanController::class, 'kirim'])->name('kirim');
// Route::post('/proses',[ProsesController::class, 'update'])->name('proses');
// Route::get('/login', [AuthController::class,'showFormLogin'])->name('login');


//ROUTE DI BAWAH KALO UDAH BISA AUTH CONTROLLER
Route::get('/', [AuthController::class,'showFormLogin'])->name('login');
Route::get('/datakgb', [DataKGBController::class, "index"])->name('datakgb');
Route::get('/pemberitahuankgb', [PemberitahuanKGBController::class, 'index'])->name('pemberitahuankgb');
Route::get('/login', [AuthController::class,'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('isilogin');

Route::get('/', [BerandaController::class, 'index']);
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('/', [BerandaController::class, 'index'])->name('beranda');
    Route::get('logout', [AuthController::class,'logout'])->name('logout'); 
});

// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');
