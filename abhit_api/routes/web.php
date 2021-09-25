<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\website\DashboardController;
use App\Http\Controllers\website\BlogController;

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

/* ------------------------------- Course ------------------------------------ */
Route::prefix('course')->group(function(){
    Route::get('', function () {
        return view('website.course.course');
    })->name('website.course');

    Route::get('details', function () {
        return view('website.course.courseDetails');
    })->name('website.course.details');
});

/* ------------------------------- Course ------------------------------------ */
Route::prefix('blog')->group(function(){
    // Route::get('', function () {
    //     return view('website.course.course');
    // })->name('website.course');

    Route::get('details/{id}',[BlogController::class,'details'])->name('website.blog.details');
});





/* ------------------------------- Admin Login ------------------------------------ */
Route::view('login','admin.auth.login')->name('login');
Route::post('signin',[AuthController::class,'customLogin'])->name('custom.signin');



/* ------------------------------- Views -> Alok ------------------------------------ */
Route::view('about-us','website.about.about')->name('website.about');
Route::view('gallery','website.gallery.gallery')->name('website.gallery');
Route::view('knowledge-forum','website.knowledge.knowledge_forum')->name('website.knowledge.forum');
Route::view('knowledge-details-post','website.knowledge.knowledge_details_post')->name('website.knowledge.details.post');
Route::view('knowledge-tab','website.knowledge.knowledge_tab')->name('website.knowledge.tab');
Route::view('contact','website.contact.contact')->name('website.contact');
Route::view('cart','website.cart.cart')->name('website.cart');
Route::view('checkout','website.cart.checkout')->name('website.checkout');
Route::view('website/login','website.auth.login')->name('website.login');
Route::view('website/forgot-password','website.auth.forgot')->name('website.forgot.password');
Route::view('website/new-password','website.auth.newpassword')->name('website.new.password');

