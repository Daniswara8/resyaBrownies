<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.homePage.home');
})->name('home');


Route::get('/product', function () {
    return view('user.productPage.productUser');
})->name('product');


route::get('/cart', function () {
    return view('user.cartPage.cartUser');
})->name('cart');


route::get('/dashboard', function () {
    return view('');
})->name('dashboard');


route::get('/testimoni', function () {
    return view('user.pagesIncluded.testimoniPage.testimoniPage');
})->name('testimoni');


route::get('/register', function () {
    return view('logRes.register');
})->name('register');


route::get('/login', function () {
    return view('logRes.login');
})->name('login');

route::get('/admin/daftarUser', function () {
    return view('admin.componentAdmin.componentDaftarProduct.daftarProductAdmin');
});

route::get('/admin/daftarProduct', function () {
    return view('admin.componentAdmin.componentDaftarProduct.daftarProductAdmin');
});
