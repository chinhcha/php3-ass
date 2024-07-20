<?php

use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\PostController;
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

Route::get('/' , [HomeController::class,'index'])->name('home');
Route::get('/home', [HomeController::class,'index']);
Route::get('/detail/{id}' , [PostController::class,'index'])->name('detail');
Route::get('/tim', [PostController::class,'search'])->name('search');



Route::get('/admin', function () {
    return view('admin.layouts.master');
});
