<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index',['title' => 'Dashboard Jongveksi']);
});


Route::get('/login', function () {
    return view('login.login',['title' => 'Login Jongveksi']);
});

Route::get('/layanan', function () {
    return view('layanan',['title' => 'Layanan Jongveksi']);
});

Route::get('/produk', function () {
    return view('produk',['title' => 'Produk Jongveksi']);
});

Route::get('/detail-produk', function () {
    return view('detail-produk',['title' => 'Detail Produk Jongveksi']);
});

Route::get('/about', function () {
    return view('about',['title' => 'Tentang Jongveksi']);
});



// Route::get('/produk', function () {
//     return view('produk',['title' => 'Produk Kami']);
// });


// Route::get('/layanan', function () {
//     return view('layanan',['title' => 'Layanan Kami']);
// });

// Route::get('/tentang-kami', function () {
//     return view('about',['title' => 'Tentang Kami']);
// });

// Route::get('/cek-progres-produksi', function () {
//     return view('cek-progres-produksi',['title' => 'Cek Progres Produksi Jongveksi']);
// });