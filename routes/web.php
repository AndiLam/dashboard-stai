<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');  // Menambahkan nama 'home' untuk route ini

Route::get('/profile', function () {
    return view('profile');
})->name('profile');  // Menambahkan nama 'profile' untuk route ini

Route::get('/logout', function () {
    return view('logout');
})->name('logout');  // Menambahkan nama 'logout' untuk route ini