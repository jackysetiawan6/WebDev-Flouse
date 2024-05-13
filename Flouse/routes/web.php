<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/profile', function () {
    return view('Profile');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/transaction', function () {
    return view('transactions');
});

Route::get('/address', function () {
    return view('address');
});

Route::get('/payment', function () {
    return view('payment');
});
Route::get('/navbar', function () {
    return view('Navbar');
});

Route::get('/footer', function () {
    return view('Footer');
});

Route::get('/login', function () {
    return view('Auth/LoginEmail');
});

Route::get('/login/password', function () {
    return view('Auth/LoginPassword');
});
