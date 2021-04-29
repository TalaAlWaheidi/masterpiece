<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'is_admin'], function () {
//Admin
Route::get('/dashboard/admin',[\App\Http\Controllers\AdminController::class,'index'])->name('admin.all');
Route::get('/dashboard/admin/create',[\App\Http\Controllers\AdminController::class,'create'])->name('admin.create');
Route::post('/dashboard/admin/create',[\App\Http\Controllers\AdminController::class,'store'])->name('admin.store');
Route::get('/dashboard/admin/edit/{id}', [\App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
Route::put('/dashboard/admin/edit/{id}', [\App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
Route::delete('/dashboard/admin/delete/{id}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.delete');


//Category
Route::get('/dashboard/category',[\App\Http\Controllers\CategoryController::class,'index'])->name('category.all');
Route::get('/dashboard/category/create',[\App\Http\Controllers\CategoryController::class,'create'])->name('category.create');
Route::post('/dashboard/category/create',[\App\Http\Controllers\CategoryController::class,'store'])->name('category.store');
Route::get('/dashboard/category/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::put('/dashboard/category/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
Route::delete('/dashboard/category/delete/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');


//Job
Route::get('/dashboard/job',[\App\Http\Controllers\JobController::class,'index'])->name('job.all');
Route::get('/dashboard/job/create',[\App\Http\Controllers\JobController::class,'create'])->name('job.create');
Route::post('/dashboard/job/create',[\App\Http\Controllers\JobController::class,'store'])->name('job.store');
Route::get('/dashboard/job/edit/{id}', [\App\Http\Controllers\JobController::class, 'edit'])->name('job.edit');
Route::put('/dashboard/job/edit/{id}', [\App\Http\Controllers\JobController::class, 'update'])->name('job.update');
Route::delete('/dashboard/job/delete/{id}', [\App\Http\Controllers\JobController::class, 'destroy'])->name('job.delete');

//Applied
Route::get('/dashboard/applied',[\App\Http\Controllers\AppliedController::class,'show'])->name('applied.all');

//Contact
Route::get('/dashboard/contact',[\App\Http\Controllers\ContactController::class,'show'])->name('contact.all');
Route::delete('/dashboard/contact/delete/{id}',[\App\Http\Controllers\ContactController::class,'destroy'])->name('contact.delete');

});

//public-pages
Route::get('/',[\App\Http\Controllers\CategoryController::class,'homecat'])->name('index');
Route::get('/pub/alljobs/{category}',[\App\Http\Controllers\JobController::class,'categoryjob'])->name('job.cat');
Route::get('/pub/alljobs/details/{job}',[\App\Http\Controllers\JobController::class,'details'])->name('job.details');
Route::get('/pub/alljobs',[\App\Http\Controllers\JobController::class,'showall'])->name('publicjob.all');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact',[\App\Http\Controllers\ContactController::class,'store'])->name('contact.store');
Route::get('/applied/{job}',[\App\Http\Controllers\AppliedController::class,'index'])->name('applied');
Route::post('/applied/{job}',[\App\Http\Controllers\AppliedController::class,'store'])->name('applied.store');
Route::get('/search',[\App\Http\Controllers\JobController::class,'Search'])->name('search');

