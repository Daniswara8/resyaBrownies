<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'nama_product' => 'Brownies Coklat',
                'foto_product' => 'images/brownies.jpg',
                'harga_product' => '35000',
                'kategori_product' => 'snackCemilan',
                'stok' => 'tersedia',
            ],
            [
                'nama_product' => 'Bolu Gulung',
                'foto_product' => 'images/boluGulung.jpg',
                'harga_product' => '40000',
                'kategori_product' => 'snackCemilan',
                'stok' => 'tersedia',
            ],
            [
                'nama_product' => 'Nasi Tumpeng',
                'foto_product' => 'images/nasiTumpeng.jpg',
                'harga_product' => '200000',
                'kategori_product' => 'nasiLauk',
                'stok' => 'tersedia',
            ],
            [
                'nama_product' => 'Cheese Stick',
                'foto_product' => 'images/cheeseStick.jpg',
                'harga_product' => '25000',
                'kategori_product' => 'snackCemilan',
                'stok' => 'tidakTersedia',
            ]
        ]);
    }
}
