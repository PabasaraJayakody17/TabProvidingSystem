<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
 Route::get('/',[WelcomeController::class,'index'])->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin routes
Route::get('/admin/dashboard',[DashboardController::class,'index'])->middleware('admin')->name('admin.dashboard');
Route::get('/admin/{userId}/delete',[DashboardController::class,'delete'])->middleware('admin')->name('user.delete');
Route::get('/admin/{userId}/updateTabStatus',[DashboardController::class,'updateTabStatus'])->middleware('admin')->name('user.updateTabStatus');
Route::get('/admin/{userId}/updateTabStatusBack',[DashboardController::class,'updateTabStatusBack'])->middleware('admin')->name('user.updateTabStatusBack');
Route::get('/admin/{userId}/updateTabStatusToZero',[DashboardController::class,'updateTabStatusToZero'])->middleware('admin')->name('user.updateTabStatusToZero');

//school_info page routes
