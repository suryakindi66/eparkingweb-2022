<?php

use App\Models\DataParking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataParkingController;
use Illuminate\Support\Facades\Auth;

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
// Login Controller
Route::get('/', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'postlogin']);
Route::post('/login/logout', [LoginController::class, 'logout']);
Route::get('/login/logout', [LoginController::class, 'index']);


/* eparking controller */
Route::get('/eparking',[DataParkingController::class, 'index'])->middleware('auth');
Route::post('/eparking', [DataParkingController::class, 'store'])->middleware('auth');
Route::delete('/eparking/{id}', [DataParkingController::class, 'destroy'])->middleware('auth');
Route::put('/eparking/{id}', [DataParkingController::class, 'show'])->middleware('auth');
Route::get('/eparking/{id}', [DataParkingController::class, 'show'])->middleware('auth');