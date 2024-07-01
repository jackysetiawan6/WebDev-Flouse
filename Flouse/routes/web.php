<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('profile', function () {
    return view('Profile/Profile');
});

Route::get('transaction', function () {
    return view('Profile/transactions');
});

Route::get('transaction/nan', function () {
    return view('Profile/nan');
});

Route::get('address', function () {
    return view('Profile/address');
});

Route::get('payment', function () {
    return view('Profile/payment');
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

Route::prefix('/login')->group(function(){
    Route::get('', [LoginController::class, 'index_email'])->middleware('guest');

    Route::post('', [LoginController::class, 'auth_email']);

    Route::get('/password', [LoginController::class, 'index_password'])->middleware(('guest'));

    Route::post('/password', [LoginController::class, 'auth_password']);
});

Route::prefix('/register')->group(function(){
    Route::get('/', [RegisterController::class, 'index']);

    Route::post('/', [RegisterController::class, 'store']);
});

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/store', function () {
    $categories = [
        'Aster', 'Calla Lily', 'Carnations',
        'Chrysanthemum', 'Daisy', 'Snapdragon'
    ];
    $colors = [
        'Red', 'Orange', 'Yellow', 'Green',
        'Blue', 'Purple', 'Pink', 'White',
        'Black'
    ];
    return view('Store', ['categories' => $categories, 'colors' => $colors]);
})->name('store');

Route::get('/help/payment', function () {
    return view('Help/Payment');
});

Route::get('/help/howtoorder', function () {
    return view('Help/HowToOrder');
});

Route::get('/help/contactus', function () {
    return view('Help/ContactUs');
});

Route::get('/help/shipping', function () {
    return view('Help/Shipping');
});

Route::get('/help/plantcaretips', function () {
    return view('Help/PlantCareTips');
});

Route::get('/help/faq', function () {
    return view('Help/FAQ');
});

Route::get('/forum', function () {
    return view('Forum');
})->name('forum');

Route::get('/detail', function () {
    return view('ProductDetail');
});

Route::get('/cart', [CartController::class, 'index']);
