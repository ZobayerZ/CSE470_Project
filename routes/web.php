<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController; // Add SubCategoryController

// Default landing route
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes (Laravel built-in)
Auth::routes();

// Registration route
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Default home route (redirects after login)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin dashboard route
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Customer dashboard route
Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');

// Admin-specific route protected by role middleware
Route::middleware(['auth', 'role:admin'])->group(function () {

    // Admin Dashboard
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Admin Management
    Route::prefix('admin/admin')->group(function () {
        Route::get('/list', [AdminController::class, 'index'])->name('admin.list');
        Route::get('/add', [AdminController::class, 'create'])->name('admin.add');
        Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
        Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
        Route::post('/update/{id}', [AdminController::class, 'update'])->name('admin.update');
        Route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
    });

    // Category Management
    Route::prefix('admin/category')->group(function () {
        Route::get('/list', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    });

    // SubCategory Management (New Routes)
    Route::prefix('admin/sub_category')->group(function () {
        Route::get('/list', [SubCategoryController::class, 'index'])->name('admin.sub_category.index');
        Route::get('/create', [SubCategoryController::class, 'create'])->name('admin.sub_category.create');
        Route::post('/store', [SubCategoryController::class, 'store'])->name('admin.sub_category.store');
        Route::get('/edit/{id}', [SubCategoryController::class, 'edit'])->name('admin.sub_category.edit');
        Route::post('/update/{id}', [SubCategoryController::class, 'update'])->name('admin.sub_category.update');
        Route::delete('/delete/{id}', [SubCategoryController::class, 'destroy'])->name('admin.sub_category.destroy');
    });
});

// Customer-specific route protected by role middleware
Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/customer/dashboard', function () {
        return view('customer.dashboard');
    })->name('customer.dashboard');
});
