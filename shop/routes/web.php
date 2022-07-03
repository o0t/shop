<?php

use App\Http\Controllers\AdminController;
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


// Page Products
Route::get('Headphones', function () {
    return view('Products.Headphones');
})->name('Headphones');

Route::get('keyboard', function () {
    return view('Products.keyboard');
})->name('keyboard');


// Admin
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/Products', [AdminController::class, 'index']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
