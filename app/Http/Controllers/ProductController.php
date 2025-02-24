<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Admin Page
    public function productIndex()
    {
        $products = Product::all();
        return view('admin.componentAdmin.daftarProduct.listProduct', compact('products'));
    }

    public function productCreateShow()
    {
        return view('admin.componentAdmin.daftarProduct.tambahProduct');
    }

    public function productCreateStore(Request $request)
    {
        $request->validate([
            'foto_product' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama_product' => 'required|string|max:255',
            'harga_product' => 'required|numeric',
            'kategori_product' => 'required|in:snackCemilan,nasiLauk',
            'stok' => 'required|in:tersedia,tidakTersedia',
        ]);

        $imagePath = $request->file('foto_product')->store('product_images', 'public');

        Product::create([
            'foto_product' => $imagePath,
            'nama_product' => $request->nama_product,
            'harga_product' => $request->harga_product,
            'kategori_product' => $request->kategori_product,
            'stok' => $request->stok,
        ]);

        return redirect()->route('admin.listProduct')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function productEditShow($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.componentAdmin.daftarProduct.editProduct', compact('product'));
    }

    public function productEditStore(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'foto_product' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'nama_product' => 'required|string|max:255',
            'harga_product' => 'required|numeric',
            'kategori_product' => 'required|in:snackCemilan,nasiLauk',
            'stok' => 'required|in:tersedia,tidakTersedia',
        ]);

        if ($request->hasFile('foto_product')) {
            Storage::disk('public')->delete($product->foto_product);
            $imagePath = $request->file('foto_product')->store('product_images', 'public');
            $product->foto_product = $imagePath;
        }

        $product->update([
            'nama_product' => $request->nama_product,
            'harga_product' => $request->harga_product,
            'kategori_product' => $request->kategori_product,
            'stok' => $request->stok,
        ]);

        return redirect()->route('admin.listProduct')->with('success', 'Produk berhasil diperbarui.');
    }

    public function productDelete($id)
    {
        $product = Product::findOrFail($id);
        Storage::disk('public')->delete($product->foto_product);
        $product->delete();
        return redirect()->route('admin.listProduct')->with('success', 'Produk berhasil dihapus.');
    }

    // User Page
    public function productPage()
    {
        $products = Product::all();
        return view('user.productPage.productUser', compact('products'));
    }

    public function searchProduct(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('nama_product', 'like', "%$query%")->get();

        return response()->json($products);
    }
}
