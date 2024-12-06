<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'loginView')->name('login.index');
    Route::get('login', 'loginView')->name('loginApi');
    Route::post('login', 'login')->name('login.submit');


});


Route::get('dashboard', [DashboardController::class, 'getDashboard'])->name('dashboard');
Route::get('sup/dashboard', [DashboardController::class, 'getDashboard'])->name('dashboard');


Route::get('customers', [CustomerController::class, 'index'])->name('users');
Route::get('customers/add', [CustomerController::class, 'addUser'])->name('add-customer');

