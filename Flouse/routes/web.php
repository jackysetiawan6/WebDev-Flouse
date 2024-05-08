<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});


Route::get('/navbar', function () {
    return view('Navbar');
});
