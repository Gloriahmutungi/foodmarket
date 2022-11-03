<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ForgotPasswordController;

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

Route::get('/',[RestoController::class,'index'])->name('homepage');
Route::get('/about',[RestoController::class,'about'])->name('about');
Route::get('/menu',[RestoController::class,'menu'])->name('menu');
Route::get('/stuff',[RestoController::class,'stuff'])->name('stuff');
Route::get('/gallery',[RestoController::class,'gallery'])->name('gallery');
Route::get('/blog',[RestoController::class,'blog'])->name('blog');
Route::get('/blogdetails',[RestoController::class,'blogdetails'])->name('blogdetails');
// contact
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/send',[ContactController::class,'store'])->name('store');
// Auth
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/post-login',[UserController::class, 'postlogin'])->name('login.save');
Route::get('/registration',[UserController::class, 'create'])->name('register.create');
Route::post('/post-registration',[UserController::class, 'store'])->name('register.store');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

// password reset

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// reservations
Route::get('/reservation',[ReservationController::class,'reservation'])->name('reservation');
Route::post('/post-reservation',[ReservationController::class,'store'])->name('reservation.store');