<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\SubjectController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\ChapterController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\GalleryController;

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

/* ------------------------------- COURSE ------------------------------------ */
Route::prefix('course')->group(function () {

    /* ------------------------------- COURSE ------------------------------------ */
    Route::get('',[CourseController::class,'index'])->name('admin.get.course');
    Route::view('create', 'admin.course.create')->name('admin.create.course');
    Route::post('creating',[CourseController::class,'create'])->name('admin.creating.course');

});

/* ------------------------------- CHAPTER ------------------------------------ */
Route::prefix('chapter')->group(function () {

    /* ------------------------------- CHAPTER ------------------------------------ */
    Route::get('{id}',[ChapterController::class,'index'])->name('admin.get.chapter');
    // Route::view('create', 'admin.course.create')->name('admin.create.course');
    Route::post('creating',[ChapterController::class,'create'])->name('admin.creating.chapter');

});

/* ------------------------------- Master ------------------------------------ */
Route::prefix('master')->group(function () {

    /* ------------------------------- COURSE ------------------------------------ */
    Route::prefix('subject')->group(function () {
        Route::get('',[SubjectController::class,'index'])->name('admin.get.subject');
        Route::view('create', 'admin.master.subjects.create')->name('admin.create.subject');
        Route::post('creating',[SubjectController::class,'create'])->name('admin.creating.subject');
        Route::post('active',[SubjectController::class,'active'])->name('admin.active.subject');

    });

    /* ------------------------------- Banner ------------------------------------ */
    Route::prefix('banner')->group(function () {
        Route::get('',[BannerController::class,'index'])->name('admin.get.banner');
        Route::view('create', 'admin.master.banner.create')->name('admin.create.banner');
        Route::post('creating',[BannerController::class,'create'])->name('admin.creating.banner');
        Route::post('active',[BannerController::class,'active'])->name('admin.active.banner');
        Route::get('edit/{id}',[BannerController::class,'editBanner'])->name('admin.edit.banner');
    });

    /* ------------------------------- Blog ------------------------------------ */
    Route::prefix('blog')->group(function () {
        Route::get('',[BlogController::class,'index'])->name('admin.get.blog');
        Route::view('create','admin.master.blog.create')->name('admin.create.blog');
        Route::post('creating',[BlogController::class,'create'])->name('admin.creating.blog');
        Route::post('ckeditorImage',[BlogController::class,'ckeditorImage'])->name('upload');
    });

     /* ------------------------------- Gallery ------------------------------------ */
     Route::prefix('gallery')->group(function () {
        Route::get('',[GalleryController::class,'index'])->name('admin.get.gallery');
        Route::view('create','admin.master.gallery.create')->name('admin.create.gallery');
        Route::post('creating',[GalleryController::class,'create'])->name('admin.creating.gallery');
        // Route::post('ckeditorImage',[BlogController::class,'ckeditorImage'])->name('upload');
    });

});
