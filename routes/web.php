<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;



Route::get('/', [HomeController::class, 'showHome'])->name('home');
Route::get('/product', [ProductController::class, 'productPage'])->name('product');
Route::get('/search-product', [ProductController::class, 'searchProduct'])->name('search.product');

Route::middleware(['auth'])->group(function () {

    Route::group(['controller' => UserController::class], function () {
        Route::get('/dashboardUser', 'profileShow')->name('profile.show');
        Route::post('/dashboardUser/edit', 'profileUpdate')->name('profile.update');
        Route::post('/dashboardUser/delete', 'profileDelete')->name('profile.delete');
        Route::post('/logout', 'logout')->name('logout');
    });

    Route::group(['controller' => CartController::class], function () {
        Route::get('/cart', 'cartShow')->name('cart.show');
        Route::post('/cart/{product}', 'cartAdd')->name('cart.add');
        Route::post('/cart/update-quantity/{cart}', 'updateQuantity')->name('cart.updateQuantity');
        Route::delete('/cart/{cart}', 'cartDelete')->name('cart.delete');
        Route::post('/checkout', 'cartCheckout')->name('cart.checkout');
    });

    Route::get('/dashboardUser/order', [OrderController::class, 'orderShowHistory'])->name('profile.order');
    Route::post('/dashboardUser/listBatalOrder/{id}/proses', [OrderController::class, 'orderBatalProsesUser'])->name('profile.orderBatal.store');
});

Route::middleware(['admin'])->group(function () {
    Route::group(['controller' => ProductController::class], function () {
        Route::get('/dashboardAdmin/listProduct', 'productIndex')->name('admin.listProduct');
        Route::get('/dashboardAdmin/tambahProduct', 'productCreateShow')->name('admin.productCreate.show');
        Route::post('/dashboardAdmin/tambahProduct', 'productCreateStore')->name('admin.productCreate.store');
        Route::get('/dashboardAdmin/edit/{id}', 'productEditShow')->name('admin.productEdit.show');
        Route::put('/dashboardAdmin/edit/{id}', 'productEditStore')->name('admin.productEdit.store');
        Route::delete('dashboardAdmin/delete/{id}', 'productDelete')->name('admin.product.delete');
    });

    Route::group(['controller' => OrderController::class], function () {
        Route::get('dashboardAdmin/listPending', 'orderShowPending')->name('admin.listOrderPending');
        Route::get('dashboardAdmin/listKonfirmasi', 'orderKonfirmasiShow')->name('admin.listKonfirmasi.show');
        Route::post('/dashboardAdmin/listKonfirmasi/{id}/proses', 'orderKonfirmasiProses')->name('admin.listKonfirmasi.store');
        Route::get('dashboardAdmin/listSiapAmbil', 'orderSiapAmbilShow')->name('admin.listSiapAmbil.show');
        Route::post('/dashboardAdmin/listSiapAmbil/{id}/proses', 'orderSiapAmbilProses')->name('admin.listSiapAmbil.store');
        Route::get('dashboardAdmin/listSelesai', 'orderSelesaiShow')->name('admin.listSelesai.show');
        Route::post('/dashboardAdmin/listSelesai/{id}/proses', 'orderSelesaiProses')->name('admin.listSelesai.store');
        Route::get('dashboardAdmin/listBatal', 'orderBatalShow')->name('admin.listBatal.show');
        Route::post('/dashboardAdmin/listBatal/{id}/proses', 'orderBatalProses')->name('admin.listBatal.store');
    });

    Route::get('dashboardAdmin/listUser', [UserController::class, 'listUserShow'])->name('admin.listUser');
});


Route::group(['controller' => UserController::class], function () {
    Route::get('/register', 'registerIndex')->name('register.index');
    Route::get('/login', 'loginIndex')->name('login.index');
    Route::post('/register', 'registerSubmit')->name('register.submit');
    Route::post('/login', 'loginSubmit')->name('login.submit');
});
