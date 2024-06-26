<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('login', function () {
    return view('pages.auth.login');
})->name('login');;


Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');
     Route::resource('user', UserController::class);
    // //category
     Route::resource('category', \App\Http\Controllers\CategoryController::class);
    // //product
     Route::resource('product', \App\Http\Controllers\ProductController::class);
     //order
    Route::resource('order', \App\Http\Controllers\OrderController::class);
});

