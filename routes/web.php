<?php

use App\Models\DataParking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataParkingController;
use App\Http\Controllers\LandingPageController;

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
/*landing page */

Route::get('/', [LandingPageController::class, 'index']);



/* Register  */

Route::get('/admin/register', [LoginController::class, 'register'])->middleware('guest')->name('login');
Route::post('/admin/register', [LoginController::class, 'postregister'])->middleware('guest')->name('login');   

// Login Controller 
Route::get('/admin/login', [LoginController::class, 'index'])->middleware('validationlogin')->name('login');
Route::post('/admin/login', [LoginController::class, 'postlogin'])->middleware('guest')->name('login');
Route::post('/admin/login/logout', [LoginController::class, 'logout']);
Route::get('/admin/login/logout', [LoginController::class, 'logout']);


/* eparking controller */
Route::get('/admin/eparking',[DataParkingController::class, 'index'])->middleware('auth');
Route::post('/admin/eparking', [DataParkingController::class, 'store'])->middleware('auth');
Route::delete('/admin/eparking/{id}', [DataParkingController::class, 'destroy'])->middleware('auth');
Route::put('/admin/eparking/{id}', [DataParkingController::class, 'show'])->middleware('auth');
Route::get('/admin/eparking/{id}', [DataParkingController::class, 'show'])->middleware('auth');