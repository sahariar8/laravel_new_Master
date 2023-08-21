<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/account',[HomeController::class,'account'])->name('account');
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/error',[HomeController::class,'error'])->name('error');
Route::get('/single_blog',[HomeController::class,'singleblog'])->name('singleblog');
Route::get('/individual_product',[HomeController::class,'individualProduct'])->name('individualProduct');
