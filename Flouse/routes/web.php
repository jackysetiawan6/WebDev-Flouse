<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/navbar', function () {
    return view('Navbar');
});

Route::get('/footer', function () {
    return view('Footer');
});

Route::get('/login', function () {
    return view('Login');
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