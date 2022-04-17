<?php

use App\Http\Controllers\AdminController;
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

Route::get('/user/register', [LoginController::class, 'register'])->middleware('guest')->name('login');
Route::post('/user/register', [LoginController::class, 'postregister'])->middleware('guest')->name('login');   

// Login Controller 
Route::get('/user/login', [LoginController::class, 'index'])->middleware('validationlogin')->name('login');
Route::post('/user/login', [LoginController::class, 'postlogin'])->middleware('guest')->name('login');
Route::post('/user/login/logout', [LoginController::class, 'logout']);
Route::get('/user/login/logout', [LoginController::class, 'logout']);


/* eparking controller */
Route::get('/user/eparking',[DataParkingController::class, 'index'])->middleware('auth');
Route::post('/user/eparking', [DataParkingController::class, 'store'])->middleware('auth');
Route::put('/user/eparking/status/{id}', [DataParkingController::class, 'status'])->middleware('auth');
Route::put('/user/eparking/{id}', [DataParkingController::class, 'show'])->middleware('auth');
Route::get('/user/eparking/{id}', [DataParkingController::class, 'show'])->middleware('auth');



Route::get('/admin/login', [AdminController::class, 'viewlogin'])->middleware('sessionadmin')->name('admin');
Route::post('/admin/login', [AdminController::class, 'postlogin'])->middleware('guest'); 
Route::get('/admin/dashboard',[AdminController::class, 'index'])->middleware('dashboardadmin');
Route::get('/admin/dataparkir',[AdminController::class, 'viewdataparkir'])->middleware('dashboardadmin');
Route::get('/admin/data/user',[AdminController::class, 'viewdatauser'])->middleware('dashboardadmin');
Route::get('/admin/detail/{id}',[AdminController::class, 'viewdetailuser'])->middleware('dashboardadmin');
Route::post('/admin/detail/{id}',[AdminController::class, 'postubahpw'])->middleware('dashboardadmin');
Route::get('/admin/delete/{id}',[AdminController::class, 'deleteuser'])->middleware('dashboardadmin');
Route::post('/admin/dataparkir',[AdminController::class, 'postdataparkir'])->middleware('dashboardadmin');
Route::put('/admin/dataparkir/status/{id}', [AdminController::class, 'status'])->middleware('dashboardadmin');
Route::get('/admin/export', [AdminController::class, 'export'])->middleware('dashboardadmin');
Route::get('/admin/dataparkir/deleteall', [AdminController::class, 'deleteall'])->middleware('dashboardadmin');

