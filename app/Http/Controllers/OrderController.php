<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;


class OrderController extends Controller
{

    // Admin
    public function orderShowPending()
    {
        $orders = Order::where('status_pemesanan', 'pending')
            ->with(['user', 'product'])
            ->get();


        return view('admin.componentAdmin.daftarOrder.pending', compact('orders'));
    }

    public function orderKonfirmasiShow()
    {
        $orders = Order::where('status_pemesanan', 'dikonfirmasi')->get();

        return view('admin.componentAdmin.daftarOrder.orderKonfirmasi', compact('orders'));
    }

    public function orderKonfirmasiProses($id)
    {
        $order = Order::findOrFail($id);

        $order->status_pemesanan = 'dikonfirmasi';
        $order->save();

        return redirect()->route('admin.listKonfirmasi.show')->with('success', 'Pesanan berhasil dikonfirmasi dan sedang diproses.');
    }

    public function orderSiapAmbilShow()
    {
        $orders = Order::where('status_pemesanan', 'siap_diambil')->get();

        return view('admin.componentAdmin.daftarOrder.orderSiap', compact('orders'));
    }

    public function orderSiapAmbilProses($id)
    {
        $order = Order::findOrFail($id);

        $order->status_pemesanan = 'siap_diambil';
        $order->save();

        return redirect()->route('admin.listSiapAmbil.show')->with('success', 'Pesanan Sudah Siap Diambil Oleh Pelanggan.');
    }

    public function orderSelesaiShow()
    {
        $orders = Order::where('status_pemesanan', 'selesai')->get();

        return view('admin.componentAdmin.daftarOrder.orderSelesai', compact('orders'));
    }

    public function orderSelesaiProses($id)
    {
        $order = Order::findOrFail($id);

        $order->status_pemesanan = 'selesai';
        $order->save();

        return redirect()->route('admin.listSelesai.show')->with('success', 'Pesanan Sudah Diambil dan Selesai');
    }

    public function orderBatalShow()
    {
        $orders = Order::where('status_pemesanan', 'dibatalkan')->get();
        return view('admin.componentAdmin.daftarOrder.orderBatal', compact('orders'));
    }

    public function orderBatalProses($id)
    {
        $order = Order::findOrFail($id);

        $order->status_pemesanan = 'dibatalkan';
        $order->save();

        return redirect()->route('admin.listBatal.show')->with('success', 'Pesanan berhasil dibatalkan.');
    }

    // User
    public function orderShowHistory()
    {
        $orders = Order::with(['user', 'product'])->get();

        return view('user.dashboardUser.orderUser', compact('orders'));
    }
    public function orderBatalProsesUser($id)
    {
        $order = Order::findOrFail($id);

        $order->status_pemesanan = 'dibatalkan';
        $order->save();

        return redirect()->back()->with('success', 'Pesanan berhasil dibatalkan.');
    }
}
