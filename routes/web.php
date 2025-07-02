<?php

// Import controller dan middleware yang digunakan
use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\ActivityLogController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UsersController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

// Routing untuk halaman utama (frontend)
Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index'); // Menampilkan halaman beranda
});

// Routing untuk proses order dan callback pembayaran Midtrans
Route::controller(OrderController::class)->group(function(){
    Route::post('/order', 'createOrder'); // Membuat pesanan baru
    Route::post('/midrans/callback', 'callback'); // Menangani callback dari Midtrans
});

// Routing untuk pengguna tamu (belum login)
Route::middleware('guest')->group(function(){
    Route::controller(AuthController::class)->group(function(){
        Route::get('/login', 'showloginform')->name('login'); // Menampilkan form login
        Route::post('/login-post', 'login')->name('login.post'); // Proses login
        Route::post('actionsignup', 'actionsignup')->name('signup'); // Proses pendaftaran akun
    });
});

// Routing untuk logout (hanya bisa dilakukan oleh user yang login)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Proses logout

// Routing untuk pengguna yang sudah login (autentikasi)
Route::middleware('auth')->group(function(){
    // Routing untuk dashboard backend
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/backend/dashboard', 'index')->name('backend.dashboard.index'); // Menampilkan dashboard backend
    });

    // Routing untuk manajemen pengguna
    Route::get('users/dataTable', [UsersController::class, 'dataTable'])->name('users.dataTable'); // Data pengguna untuk DataTable
    Route::post('users/store', [UsersController::class, 'store'])->name('users.store'); // Simpan data pengguna

    // Routing untuk log aktivitas pengguna
    Route::controller(ActivityLogController::class)->group(function(){
        Route::get('/backend/activitylogs', 'index')->name('backend.activitylogs.index'); // Menampilkan halaman log aktivitas
        Route::get('/backend/activitylogs/dataTable', 'dataTable')->name('backend.activitylogs.dataTable'); // Data log aktivitas untuk DataTable
    });
});
