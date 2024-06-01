<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    // Nama tabel yang digunakan oleh model
    protected $table = 'cart_items';

    // Attribut yang dapat diisi (sesuaikan dengan struktur tabel Anda)
    protected $fillable = ['product_id', 'product_name', 'quantity', 'total_price'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'product_id');
    }
}
