<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'showHome'])->name('home');
Route::get('/product', [ProductController::class, 'productPage'])->name('product');

Route::group(['controller' => UserController::class], function () {
    Route::get('/dashboardUser', 'profileShow')->name('profile.show')->middleware('auth');
    Route::post('/dashboardUser/edit', 'profileUpdate')->name('profile.update')->middleware('auth');
    Route::post('/dashboardUser/delete', 'profileDelete')->name('profile.delete')->middleware('auth');
    Route::post('/logout', 'logout')->name('logout')->middleware('auth');
});

route::get('/cart', function () {
    return view('user.cartPage.cartUser');
})->name('cart');


Route::middleware(['admin'])->group(function () {
    Route::group(['controller' => ProductController::class], function () {
        Route::get('/dashboardAdmin/listProduct', 'productIndex')->name('admin.listProduct');
        Route::get('/dashboardAdmin/tambahProduct', 'productCreateShow')->name('admin.productCreate.show');
        Route::post('/dashboardAdmin/tambahProduct', 'productCreateStore')->name('admin.productCreate.store');
        Route::get('/dashboardAdmin/edit/{id}', 'productEditShow')->name('admin.productEdit.show');
        Route::put('/dashboardAdmin/edit/{id}', 'productEditStore')->name('admin.productEdit.store');
        Route::delete('dashboardAdmin/delete/{id}', 'productDelete')->name('admin.product.delete');
    });

    Route::get('dashboardAdmin/listUser', [UserController::class, 'listUserShow'])->name('admin.listUser');

    Route::get('/dashboardAdmin/listPenjualan', function () {
        return view('admin.componentAdmin.laporanPenjualan.listPenjualan');
    })->name('dashboardAdmin.listPenjualan');
});


Route::group(['controller' => UserController::class], function () {
    Route::get('/register', 'registerIndex')->name('register.index');
    Route::get('/login', 'loginIndex')->name('login.index');
    Route::post('/register', 'registerSubmit')->name('register.submit');
    Route::post('/login', 'loginSubmit')->name('login.submit');
});
UserController::createAdmin();
