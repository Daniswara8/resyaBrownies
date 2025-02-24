<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


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
        return redirect()->back()->with('success', 'Produk berhasil dihapus');
    }

    public function cartCheckout(Request $request)
    {
        // Validasi tanggal pengambilan minimal H+3 dari hari ini
        $request->validate([
            'tanggal_diambil' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    $minDate = Carbon::now()->addDays(3)->format('Y-m-d');
                    if ($value < $minDate) {
                        $fail("Tanggal pengambilan minimal H+3, mulai dari {$minDate}.");
                    }
                },
            ],
        ]);

        // Ambil semua item di keranjang user yang login
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();

        // Jika keranjang kosong, redirect kembali ke halaman cart
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.show')->with('error', 'Keranjang belanja kosong.');
        }

        // Simpan pesanan ke tabel orders
        foreach ($cartItems as $cart) {
            Order::create([
                'user_id'          => Auth::id(),
                'product_id'       => $cart->product_id,
                'quantity'         => $cart->quantity,
                'jumlah_harga'     => $cart->product->harga_product * $cart->quantity,
                'tanggal_pesan'    => now(),
                'tanggal_diambil'  => $request->tanggal_diambil,
                'status_pemesanan' => 'pending',
            ]);
        }

        // Hapus semua item dari keranjang setelah checkout
        Cart::where('user_id', Auth::id())->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Berhasil Checkout!');
    }
}
