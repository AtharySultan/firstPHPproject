<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prouductcontrollerr;
use App\Http\Controllers\dashbrdController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// auth routes
Auth::routes();

// الصفحة الرئيسية بعد تسجيل الدخول
Route::get('/home', [HomeController::class, 'index'])->name('home');

// الداشبورد والادمن
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    
    // صفحة الداشبورد الرئيسية
    Route::get('/', [dashbrdController::class, 'index'])->name('dashboard.index');

    // إدارة الكاتيقوري (Categories)
    Route::prefix('categories')->group(function () {
        Route::get('/', [categoriesController::class, 'index'])->name('categories.index');
        Route::post('/add', [categoriesController::class, 'create'])->name('categories.create');
        Route::get('/delete/{id}', [categoriesController::class, 'delete'])->name('categories.delet');
        Route::get('/edit/{id}', [categoriesController::class, 'edit'])->name('categories.Edit');
        Route::post('/update/{id}', [categoriesController::class, 'update'])->name('categories.update');
    });

    // إدارة المنتجات (Products)
    Route::prefix('products')->group(function () {
        Route::get('/adminProduct', [prouductcontrollerr::class, 'index'])->name('AdmainProuduct.index');
        Route::post('/create', [prouductcontrollerr::class, 'CreateProuduct'])->name('CreateProuduct.index');
        Route::get('/delete/{id}', [prouductcontrollerr::class, 'ProductDelete'])->name('ProductDelete.index');
        Route::get('/edit/{id}', [prouductcontrollerr::class, 'ProductEdit'])->name('ProductEdit.index');
        Route::post('/update/{id}', [prouductcontrollerr::class, 'ProductUpdate'])->name('ProductUpdate.index');
    });

});

// صفحات العميل 
Route::prefix('customer')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/about', [categoriesController::class, 'aboutUs'])->name('aboutUs');
    Route::get('/CallUs', [categoriesController::class, 'callUs'])->name('CallUs');
    Route::get('/proudcts', [categoriesController::class, 'product'])->name('proudcts');
});


