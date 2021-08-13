<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [AuthController::class,'showFormLogin'])->name('login');
Route::get('/datakgb', [DataKGBController::class, "index"])->name('datakgb');
Route::get('/pemberitahuankgb', [PemberitahuanKGBController::class, 'index'])->name('pemberitahuankgb');
// Route::view('/login', 'konten.v_login')->name('v_login');
Route::get('/login', [AuthController::class,'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class,'login']);

// Route::get('/', [AuthController::class,'showFormLogin'])->name('login');

// Route::get('register', 'AuthController@showFormRegister')->name('register');
// Route::post('register', 'AuthController@register');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', [BerandaController::class, 'index'])->name('beranda');
    Route::get('logout', [AuthController::class,'logout'])->name('logout');
 
});

// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');
