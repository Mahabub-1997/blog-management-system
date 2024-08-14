<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/manage',[HomeController::class,'manage'])->name('manage');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/new-blog',[HomeController::class,'newBlog'])->name('new.blog');
    Route::post('/save-blog',[HomeController::class,'saveBlog'])->name('save.blog');
    Route::get('/list',[HomeController::class,'listBlog'])->name('list.blog');
    Route::get('/blog-edit/{id}',[HomeController::class,'editBlog'])->name('blog.edit');
    Route::post('/blog-update/{id}',[HomeController::class,'updateBlog'])->name('blog.update');
    Route::post('/deleteimage/{id}', [HomeController::class, 'deleteImage'])->name('delete.image');
    Route::get('/delete/{id}', [HomeController::class, 'deleteAll'])->name('blog.delete');
});
