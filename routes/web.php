<?php

use App\Http\Controllers\Front\HomeController;
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


// Front Web Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication middleware
Auth::routes();

// Admin Panel Routes
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');