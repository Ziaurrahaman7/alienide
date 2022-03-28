<?php

use App\Http\Controllers\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BanarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WorkController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// =======admin==========
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::resource('admin/banar', BanarController::class)->middleware('is_admin');

// =====about =======
Route::resource('admin/about', AboutUsController::class)->middleware('is_admin');
// =====work ======
Route::resource('admin/work', WorkController::class)->middleware('is_admin');
// =====Team ======
Route::resource('admin/team', TeamController::class)->middleware('is_admin');
// =====SiteSettings ======
Route::resource('admin/siteSetting', SiteSettingController::class)->middleware('is_admin');
// =====category ======
Route::resource('admin/category', CategoryController::class)->middleware('is_admin');


