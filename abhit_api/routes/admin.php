<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CourseController;

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
Route::get('logout',[AuthController::class,'logout'])->name('log.out');

Route::get('dashboard', function () {
    return view('admin.dashboard.dashboard');
})->name('admin.dashboard');

Route::prefix('course')->group(function () {

    /* ------------------------------- COURSE ------------------------------------ */
    Route::get('',[CourseController::class,'index'])->name('admin.get.course');
    Route::view('create', 'admin.course.create')->name('admin.create.course');



});

