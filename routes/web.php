<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('user.homePage.home');
})->name('home');


Route::get('/product', function () {
    return view('user.productPage.productUser');
})->name('product');


route::get('/cart', function () {
    return view('user.cartPage.cartUser');
})->name('cart');


route::get('/dashboardUser', function () {
    return view('user.dashboardUser.informasiPribadiUser');
})->name('dashboardUser.index');


route::get('/dashboardUser/historyPemesanan', function () {
    return view('user.dashboardUser.historyPemesananUser');
})->name('dashboardUser.pemesanan');


Route::middleware(['admin'])->group(function () {

    Route::group(['controller' => ProductController::class], function () {
        Route::get('/dashboardAdmin/listProduct', 'productIndex')->name('admin.listProduct');
        Route::get('/dashboardAdmin/tambahProduct', 'productCreateShow')->name('admin.productCreate.show');
        Route::post('/dashboardAdmin/tambahProduct', 'productCreateStore')->name('admin.productCreate.store');
        Route::get('/dashboardAdmin/edit/{id}', 'productEditShow')->name('admin.productEdit.show');
        Route::put('/dashboardAdmin/edit/{id}', 'productEditStore')->name('admin.productEdit.store');
        Route::delete('dashboardAdmin/delete/{id}', 'productDelete')->name('admin.product.delete');
    });

    Route::get('/dashboardAdmin/listUser', function () {
        return view('admin.componentAdmin.daftarUser.listUser');
    })->name('dashboardAdmin.listUser');


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


route::get('/admin/daftarProduct', function () {
    return view('admin.componentAdmin.componentDaftarProduct.daftarProductAdmin');
});
