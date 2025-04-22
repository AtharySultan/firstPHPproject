<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prouductcontrollerr;
use App\Http\Controllers\dashbrdController;
use App\Http\Controllers\categoriesController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pro', [prouductcontrollerr::class, 'GetProuduct']);
Route::get('/dash', [dashbrdController::class, 'index']);
Route::get('/cat', [categoriesController::class, 'index'])->name('categories.index');
Route::post('/addcat', [categoriesController::class, 'create'])->name('categories.create');

Route::get('/about', [categoriesController::class, 'aboutUs'])->name('aboutUs');
Route::get('/CallUs', [categoriesController::class, 'callUs'])->name('CallUs');
Route::get('/proudcts', [categoriesController::class, 'product'])->name('proudcts');




