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

Route::get('/about', [HomeController::class, 'AboutPage'])->name('about');

Route::get('/contact', [HomeController::class, 'ContactPage'])->name('contact');

Route::get('/privacy', [HomeController::class, 'PrivacyPage'])->name('legal.privacy');

Route::get('/sale-policy', [HomeController::class, 'SalePolicyPage'])->name('legal.sale-policy');

Route::post('/send-email', [HomeController::class, 'sendContactEmail'])->name('sendcontactemail');

Route::get('/see-email', [HomeController::class, 'seeContactEmail'])->name('seecontactemail');

Route::get('/insta-api', [HomeController::class, 'getInstagramData'])->name('insta-api');

// Authentication middleware
Auth::routes();

// Admin Panel Routes
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

Route::post('/save-image', [App\Http\Controllers\Admin\ImageController::class, 'save'])->name('admin.image.save');

Route::get('/delete-image/{image_id}', [App\Http\Controllers\Admin\ImageController::class, 'delete'])->name('admin.image.delete');