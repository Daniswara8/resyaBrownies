<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.pagesIncluded.homepage.homepageUser');
})->name('home');


Route::get('/product', function () {
    return view('user.pagesIncluded.productPage.productPageUser');
})->name('product');


route::get('/cart', function () {
    return view('user.pagesIncluded.cartPage.cartPageUser');
})->name('cart');


route::get('/dashboard', function () {
    return view('');
})->name('dashboard');


route::get('/testimoni', function () {
    return view('user.pagesIncluded.testimoniPage.testimoniPage');
})->name('testimoni');


route::get('/register', function () {
    return view('user.logRes.register');
})->name('register');


route::get('/login', function () {
    return view('user.logRes.login');
})->name('login');
