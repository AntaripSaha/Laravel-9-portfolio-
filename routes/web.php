<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\MainController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\HomeController;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('laravel_home');


Route::controller(HomeController::class)->group(function(){

    Route::any('/', 'index')->name('home');

});



Route::prefix('admin')->middleware('admin')->group(function () {

    Route::any('/', [DashboardController::class, 'index'])->name('admin.dash');

    Route::controller(MainController::class)->group(function(){
        Route::any('/main', 'view')->name('admin.main');
        Route::any('/main/store', 'store')->name('main.store');

    });


 
});
