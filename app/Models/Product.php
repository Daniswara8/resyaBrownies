<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto_product',
        'nama_product',
        'harga_product',
        'kategori_product',
        'stok'
    ];

    // Agar memperbaiki penulisan kategori di frontend
    // protected function getKategoriProductAttribute($value)
    // {
    //     $kategori_product = [
    //         'snackCemilan' => 'Snack & Cemilan',
    //         'nasiLauk' => 'Nasi & Lauk'
    //     ];

    //     return $kategori_product[$value] ?? $value;
    // }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
