<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function showHome()
    {
        $productTerlaris = Product::whereIn('nama_product', [
            'Brownies Coklat',
            'Bolu Gulung',
            'Nasi Tumpeng'
        ])->get();

        return view('user.homePage.home', compact('productTerlaris'));
    }
}
