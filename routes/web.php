<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\TabRequestInfoController;
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

Route::get('/user/tabrequestinfo',[TabRequestInfoController::class, 'create'])->name('user.create');
//---TabRequest routes---//
Route::get('/tab/addrequest', [TabController::class, 'create'])->name('tab.addrequest');
Route::post('/tab/addrequest', [TabController::class, 'store'])->name('tab.addrequest');
Route::get('/tab/viewrequest', [TabController::class, 'view'])->name('tab.viewrequest');
Route::get('/tab/destroy/{id}', [TabController::class, 'destroy'])->name('tab.destroy');
Route::get('/tab/editrequest/{id}', [TabController::class, 'edit'])->name('tab.editrequest');
Route::post('/tab/update/{id}', [TabController::class, 'update'])->name('tab.update');
Route::get('/tab/updateTabStatus/{userId}', [TabController::class, 'updateTabStatus'])->name('tab.updateTabStatus');