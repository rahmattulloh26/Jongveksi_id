<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSliderControler;



// Hanya untuk tamu (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/', [HalamanController::class, 'dashboard']);
    Route::get('/layanan', [HalamanController::class, 'layanan']);
    Route::get('/tentang-kami', [HalamanController::class, 'about']);
    Route::get('/produk', [HalamanController::class, 'produk'])->name('produk.catalog');
    // Route::get('/produk/detail-produk', [HalamanController::class, 'detailProduk']);
    Route::get('/produk/about', [HalamanController::class, 'about']);
    Route::get('landing-page', [SessionController::class, 'index']);
    Route::get('landing-page/login', [SessionController::class, 'loginAuth'])->name('login');
    Route::post('landing-page/login', [SessionController::class, 'login'])->name("login-auth");
    Route::get('landing-page/register', [SessionController::class, 'register'])->name('register.form');
    Route::post('landing-page/register', [SessionController::class, 'create'])->name('create');
    Route::get('/detail-product/{product}', [ProductController::class, 'show'])->name('produk.detail');

});

// Hanya untuk user yang sudah login
Route::middleware('auth')->group(function () {
    // Route::get('/sesi/dashboard/{id}', fn()=> [HalamanController::class, 'dashboardLogin']);
    Route::get('dashboard', [HalamanController::class, 'dashboardLogin'])->name('dashboard.index');
    Route::resource('dashboard/catalog', ProductController::class);
    Route::resource('dashboard/slider', ProductSliderControler::class);
    

    Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
});
