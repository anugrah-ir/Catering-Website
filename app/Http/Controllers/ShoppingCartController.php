<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Menu;

class ShoppingCartController extends Controller
{
    // Menampilkan halaman keranjang
    public function index()
    {
        $cartItems = CartItem::with('menu')->get();
        return view('keranjang', compact('cartItems'));
    }

    // Mengupdate keranjang
    public function addToCart(Request $request)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);
        // Dapatkan harga produk berdasarkan ID produk
        $productId = $request->productId;
        $product = Menu::find($productId);
        $productPrice = $product->price;

        // Hitung total harga
        $quantity = $request->quantity;
        $totalPrice = $productPrice * $quantity;

        // Simpan ke dalam database
        DB::table('cart_items')->insert([
            'product_name' => $request->productName,
            'quantity' => $quantity,
            'total_price' => $totalPrice,
            'product_id' => $productId,
        ]);

        return Redirect::route('order');
    }

    public function removeFromCart($id)
    {
        CartItem::find($id)->delete();
        return redirect()->route('shopping.cart');
    }
}
