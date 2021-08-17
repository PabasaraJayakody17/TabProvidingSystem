<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TabController;
use App\Http\Controllers\TabRequestInfoController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TablistController;
use App\Http\Controllers\profileController;
use App\Http\Livewire\Selectschool;
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

//School routes
//Route::resource('school',SchoolController::class);
Route::get('/admin/createschool', [SchoolController::class, 'create'])->middleware('admin')->name('admin.createschool');
Route::get('/admin/schoolinfo', [SchoolController::class, 'index'])->middleware('admin')->name('admin.schoolinfo');
Route::post('/admin/storeschool', [SchoolController::class, 'store'])->middleware('admin')->name('admin.storeschool');
Route::get('/admin/editschool/{id}', [SchoolController::class, 'edit'])->middleware('admin')->name('admin.editschool');
Route::post('/admin/updateschool/{id}', [SchoolController::class, 'update'])->middleware('admin')->name('admin.updateschool');
Route::get('/admin/schooldestroy/{id}', [SchoolController::class, 'destroy'])->middleware('admin')->name('admin.schooldestroy');

//tablist route
//Route::resource('tablist',TablistController::class);
Route::get('/admin/tablist', [TablistController::class, 'index'])->middleware('admin')->name('admin.tablist');
Route::get('/admin/createtab', [TablistController::class, 'create'])->middleware('admin')->name('admin.createtab');
Route::post('/admin/storetab', [TablistController::class, 'store'])->middleware('admin')->name('admin.storetab');
Route::get('/admin/edittab/{id}', [TablistController::class, 'edit'])->middleware('admin')->name('admin.edittab');
Route::post('/admin/updatetab/{id}', [TablistController::class, 'update'])->middleware('admin')->name('admin.updatetab');
Route::get('/admin/showtab/{id}', [TablistController::class, 'show'])->middleware('admin')->name('admin.showtab');
Route::get('/admin/tabdestroy/{id}', [TablistController::class, 'destroy'])->middleware('admin')->name('admin.tabdestroy');


Route::group(['middleware' => ['auth']], function() {
//---TabRequest routes---//
Route::get('/tab/addrequest', [TabController::class, 'create'])->name('tab.addrequest');
Route::post('/tab/addrequest', [TabController::class, 'store'])->name('tab.addrequest');
Route::get('/tab/viewrequest', [TabController::class, 'view'])->name('tab.viewrequest');
Route::get('/tab/destroy/{id}', [TabController::class, 'destroy'])->name('tab.destroy');
Route::get('/tab/editrequest/{id}', [TabController::class, 'edit'])->name('tab.editrequest');
Route::post('/tab/update/{id}', [TabController::class, 'update'])->name('tab.update');
Route::get('/tab/updateTabStatus/{userId}', [TabController::class, 'updateTabStatus'])->name('tab.updateTabStatus');


//School routes
//Route::get('/admin/schoolinfo',function(){
   // return view('/admin/schoolinfo');
//});
Route::resource('school',SchoolController::class);
Route::get('/tab/choosedistrict', [SchoolController::class, 'select_district'])->name('tab.choosedistrict');
Route::post('/tab/choosedistrict', [SchoolController::class, 'save_school'])->name('tab.choosedistrict');
Route::post('/tab/choosezone', [SchoolController::class, 'select_zone'])->name('tab.choosezone');
// Route::post('/tab/choosezone', [SchoolController::class, 'save_zone'])->name('tab.savezone');
Route::post('/tab/chooseschool', [SchoolController::class, 'select_school'])->name('tab.selectschool');
// Route::post('/tab/chooseschool', [SchoolController::class, 'save_school'])->name('tab.chooseschool');
//Route::get('/admin/createschool', [SchoolController::class, 'create'])->name('admin.createschool');
//Route::get('/admin/schoolinfo', [SchoolController::class, 'index'])->name('admin.schoolinfo');
//Route::post('/admin/createschool', [SchoolController::class, 'store'])->name('admin.createschool');

//tablist route
Route::resource('tablist',TablistController::class);

//---user profile settings---//
Route::GET('/user/userDashboard', [profileController::class, 'viewDashboard'])->name('user.viewDashboard');
Route::GET('/user/profileView', [profileController::class, 'view'])->name('user.profileView');
Route::post('/user/update/{id}', [profileController::class, 'update'])->name('user.update');
Route::GET('/user/changePassword', [profileController::class, 'changePassword'])->name('user.changePassword');
Route::POST('/user/updatePassword', [profileController::class, 'updatePassword'])->name('user.updatePassword');
});


