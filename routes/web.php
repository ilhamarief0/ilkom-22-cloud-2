<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\ActivityLogController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UsersController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index');
});

Route::controller(OrderController::class)->group(function(){
    Route::post('/order', 'createOrder');
    Route::post('/midrans/callback', 'callback');
});
Route::middleware('guest')->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'showloginform')->name('login');
        Route::post('/login-post', 'login')->name('login.post');
        Route::post('actionsignup', 'actionsignup')->name('signup');
        Route::get('actionlogout','actionlogout')->name('logout');
    });
});

Route::middleware('auth')->group(function(){
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/backend/dashboard', 'index')->name('backend.dashboard.index');
    });
    Route::get('users/dataTable', [UsersController::class, 'dataTable'])->name('users.dataTable');
    Route::post('users/store', [UsersController::class, 'store'])->name('users.store');
    Route::controller(ActivityLogController::class)->group(function(){
        Route::get('/backend/activitylogs', 'index')->name('backend.activitylogs.index');
        Route::get('/backend/activitylogs/dataTable', 'dataTable')->name('backend.activitylogs.dataTable');
    });

});

Route::middleware(['auth'])->group(function () {
    // Rute untuk menampilkan form konfirmasi hapus akun (opsional, tapi disarankan)
    Route::get('/profile/delete', [ProfileController::class, 'deleteAccountForm'])->name('profile.delete.form');
});