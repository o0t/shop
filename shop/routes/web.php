<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
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


// Products page
Route::get('Headphones', [ProductsController::class, 'Headphones'])->name('Headphones');
Route::get('keyboards', [ProductsController::class, 'keyboards'])->name('keyboards');
Route::get('Mouse', [ProductsController::class, 'Mouse'])->name('Mouse');
Route::get('Mics', [ProductsController::class, 'Mics'])->name('Mics');


// Admin
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/Products', [AdminController::class, 'index']);
    Route::post('/Products', [AdminController::class, 'store'])->name('store');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
