<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;

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
    return view('website.home');
});

Route::get('/course', function () {
    return view('website.course.course');
});

Route::get('/course/details', function () {
    return view('website.course.courseDetails');
});


Route::view('login','admin.auth.login')->name('login');
Route::post('signin',[AuthController::class,'customLogin'])->name('custom.signin');
