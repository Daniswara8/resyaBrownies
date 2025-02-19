<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cartShow()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        $totalHarga = $cartItems->sum(function ($cartItems) {
            return $cartItems->product->harga_product * $cartItems->quantity;
        });

        return view('user.cartPage.cartUser', compact('cartItems', 'totalHarga'));
    }

    public function cartAdd(Request $request, $id)
    {

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $product = Product::findOrFail($id);
        $cartItem = Cart::where('user_id', Auth::id())->where('product_id', $id)->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $id,
                'quantity' => 1,
            ]);
        }

        return redirect()->route('cart.show')->with('success', 'Produk ditambahkan ke keranjang');
    }

    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('id', $id)->firstOrFail();

        if ($request->quantity >= 1) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();
        }

        return redirect()->back();
    }

    public function cartDelete($id)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('id', $id)->firstOrFail();
        $cartItem->delete();
        return redirect()->back();
    }
}
