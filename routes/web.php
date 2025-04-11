<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', function () {
    return view("landingpage.home");
});
Route::get('/tentang', function () {
  return view('tentang');
})->name('tentang');

// Halaman landing login (awal)
Route::get('/landing', function () {
  return view('auth.landing'); // Blade: resources/views/auth/landing.blade.php
})->name('login.landing');
// Login Admin/Pegawai
Route::get('/login/admin', function () {
  return view('auth.login-admin'); // Blade: resources/views/auth/login-admin.blade.php
})->name('login.admin');
// Login Pengunjung
Route::get('/login/user', function () {
  return view('auth.login-user'); // Blade: resources/views/auth/login-user.blade.php
})->name('login.user');
//Register
Route::get('/register', function () {
  return view('auth.register'); // Blade: resources/views/auth/login-user.blade.php
})->name('register');
//dasboard admin
Route::get('/admin', function () {
  return view('admin_dashboard');
});
//admin pss
Route::get('/admin/pss', function () {
  return view('admin_pss');
});
//admin potik 
Route::get('/admin/potik', function () {
  return view('admin_potik');
});
//admin permintaan
Route::get('/admin/permintaan', function () {
  return view('admin_permintaan');
});