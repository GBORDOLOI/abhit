<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\website\DashboardController;
use App\Http\Controllers\website\BlogController;
use App\Http\Controllers\website\GalleryController;
use App\Http\Controllers\website\CourseController;
use App\Http\Controllers\website\WebsiteAuthController;
use App\Http\Controllers\website\UserDetailsController;
use App\Http\Controllers\website\KnowledgeForumPostController;
use App\Http\Controllers\website\KnowledgeForumController;
use App\Http\Controllers\website\KnowledgeForumCommentsController;

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
    Route::get('', [CourseController::class,'index'])->name('website.course');
    Route::get('details/{id}', [CourseController::class,'details'])->name('website.course.details');
});

/* ------------------------------- Blog ------------------------------------ */
Route::prefix('blog')->group(function(){
    Route::get('', [BlogController::class,'getBlog'])->name('website.blog');
    Route::get('details/{id}',[BlogController::class,'details'])->name('website.blog.details');
});


/* ------------------------------- Gallery ------------------------------------ */
Route::prefix('gallery')->group(function(){
    Route::get('', [GalleryController::class,'index'])->name('website.gallery');
});




/* ------------------------------- Admin Login ------------------------------------ */
Route::view('login','admin.auth.login')->middleware('customRedirect')->name('login');
Route::post('signin',[AuthController::class,'customLogin'])->name('custom.signin');


/* ------------------------------- Website Login ---------------------------------- */
Route::prefix('auth')->group(function(){
    Route::post('signup', [WebsiteAuthController::class,'signup'])->name('website.auth.signup');
    Route::post('login', [WebsiteAuthController::class,'login'])->name('website.auth.login');
    Route::post('logout', [WebsiteAuthController::class,'logout'])->name('website.auth.logout');
});

Route::get('my-account',[UserDetailsController::class,'myAccount'])->name('website.user.account');
Route::post('user-details',[UserDetailsController::class,'userDetails'])->name('website.user.details');
Route::post('user-photo',[UserDetailsController::class,'uploadPhoto'])->name('website.user.upload.photo');
Route::post('update-password',[UserDetailsController::class,'updatePassword'])->name('website.update.password');

// knowladge
Route::get('knowledge-forum',[KnowledgeForumController::class,'index'])->name('website.knowledge.forum');
Route::post('add-knowledge-question',[KnowledgeForumPostController::class,'addKnowledgeQuestion'])->name('website.add.knowledge.question');
Route::get('knowledge-details-post/{id}',[KnowledgeForumController::class,'knowledgeDetailPost'])->name('website.knowledge.details.post');
Route::post('knowledge-comment',[KnowledgeForumCommentsController::class,'knowledgeComment'])->name('website.knowledge.comment');





/* ------------------------------- Views -> Alok ------------------------------------ */
Route::view('about-us','website.about.about')->name('website.about');

Route::view('knowledge-tab','website.knowledge.knowledge_tab')->name('website.knowledge.tab');
Route::view('contact','website.contact.contact')->name('website.contact');
Route::view('cart','website.cart.cart')->name('website.cart');
Route::view('checkout','website.cart.checkout')->name('website.checkout');
Route::view('website/login','website.auth.login')->name('website.login');
Route::view('website/forgot-password','website.auth.forgot')->name('website.forgot.password');
Route::view('website/new-password','website.auth.newpassword')->name('website.new.password');
Route::view('admin/course/view','admin.course.view')->name('admin.course.view');


