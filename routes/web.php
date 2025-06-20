<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

// Route::post('/login', function () {
//     return view('admin.dashboard');
// })->name('login.post');