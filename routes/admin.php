<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\client\HomeController;
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


Route::middleware(['auth'])->group(function () {


    Route::prefix('admin')->as('admin.')->group(function () {
        $crud = [
            'products' => PostController::class,
            'categories' => CategoryController::class
        ];

        Route::get('/', function () {
            return view('admin.home');
        })->name('home');

        foreach ($crud as $route => $controller) {
            Route::resource($route, $controller);
        }

    });
});



