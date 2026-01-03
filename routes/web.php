<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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


// main pages
Route::get('/', [MainHomeController::class, 'home'])->name('home');
Route::get('/about-us', [MainHomeController::class, 'about_us'])->name('about-us-KMA');
Route::get('/contact-us', [MainHomeController::class, 'contact_us'])->name('contact-us-KMA');
Route::get('/media', [MainHomeController::class, 'media'])->name('media-KMA');

// products 
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

//blog
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('blog.show');