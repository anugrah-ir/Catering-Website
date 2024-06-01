<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    // Menampilkan halaman keranjang
    public function index()
    {
        $cartItems = session()->get('cart', []);
        return view('keranjang', compact('cartItems'));
    }

    // Mengupdate keranjang
    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);

        $productId = $request->input('productId');
        $quantity = $request->input('quantity');

        if ($quantity > 0) {
            $cart[$productId] = $quantity;
        } else {
            unset($cart[$productId]);
        }

        session()->put('cart', $cart);

        return response()->json(['success' => true]);
    }
}
