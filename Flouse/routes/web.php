<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/navbar', function () {
    return view('Navbar');
});

Route::get('/footer', function () {
    return view('Footer');
});

Route::get('/register', function () {
    return view('Auth/Register');
});

Route::get('/login', function () {
    return view('Auth/LoginEmail');
});

Route::get('/login/password', function () {
    return view('Auth/LoginPassword');
});

Route::get('/store', function () {
    $categories = [
        'Aster',
        'Calla Lily',
        'Carnations',
        'Chrysanthemum',
        'Daisy',
        'Snapdragon'
    ];
    $colors = [
        'Red',
        'Orange',
        'Yellow',
        'Green',
        'Blue',
        'Purple',
        'Pink',
        'White',
        'Black'
    ];
    return view('Store', ['categories' => $categories, 'colors' => $colors]);
})->name('store');