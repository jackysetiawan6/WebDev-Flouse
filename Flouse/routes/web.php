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
