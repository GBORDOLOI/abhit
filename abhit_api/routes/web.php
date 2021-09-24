<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\website\DashboardController;

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

Route::get('',[DashboardController::class,'index'])->name('website.dashboard');

Route::get('/course', function () {
    return view('website.course.course');
})->name('website.course');

Route::get('/course/details', function () {
    return view('website.course.courseDetails');
})->name('website.course.details');

/* ------------------------------- Admin Login ------------------------------------ */
Route::view('login','admin.auth.login')->name('login');
Route::post('signin',[AuthController::class,'customLogin'])->name('custom.signin');
