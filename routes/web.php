<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.pagesIncluded.homepage.homepage');
})->name('home');


Route::get('/product', function () {
    return view('user.pagesIncluded.productPage.productPage');
})->name('product');


route::get('/cart', function() {
    return view('user.pagesIncluded.cartPage.cartPage');
})->name('cart');


route::get('/dashboard', function() {
    return view('');
})->name('dashboard');


route::get('/testimoni', function() {
    return view('user.pagesIncluded.testimoniPage.testimoniPage');
})->name('testimoni');


