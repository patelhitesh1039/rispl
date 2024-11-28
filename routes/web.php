<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'loginView')->name('login.index');
    Route::get('login', 'loginView')->name('loginApi');

});
