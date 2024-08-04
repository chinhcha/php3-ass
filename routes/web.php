<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\PostController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

Route::get('/' , [HomeController::class,'index'])->name('home');
Route::get('/home', [HomeController::class,'index']); 
Route::get('/detail/{id}' , [PostController::class,'index'])->name('detail');
Route::get('/tim', [PostController::class,'search'])->name('search');

//authentication
Route::get('login',[AuthController::class, 'showFormLogin'])->name('login');
Route::post('login',[AuthController::class, 'handleLogin']);

Route::get('register',[AuthController::class, 'showFormRegister'])->name('register');
Route::post('register',[AuthController::class, 'handleRegister']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('password/forgot', [ForgotPasswordController::class, 'ShowFromForgot'])->name('forgot');
Route::post('password/forgot', [ForgotPasswordController::class, 'SendEmailPasss']);
// reset mật khẩu
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/update', [ResetPasswordController::class, 'reset']) ->name('password.update');

Route::get('auth/verifyemail/{id}' ,[AuthController::class, 'verifyemail']) -> name('very') ;
