<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PersonController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;



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

Route::get('/', [HomeController::class,'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', [MainController::class,'index'])->name('admin.index');
    Route::resource('people', PersonController::class);
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [UserController::class,'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class,'login'])->name('login');
    Route::get('/register', [UserController::class,'create'])->name('register.create');
    Route::post('/register', [UserController::class,'store'])->name('register.store');
});

Route::get('/logout', [UserController::class,'logout'])->name('logout')->middleware('auth');