<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    // Menampilkan halaman keranjang
    public function index()
    {
        $userId = Auth::id();
        $cartItems = CartItem::with('menu')->where('user_id', $userId)->get();
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
            'user_id' => Auth::id(), // Simpan user_id
            'product_name' => $request->productName,
            'quantity' => $quantity,
            'total_price' => $totalPrice,
            'product_id' => $productId,
        ]);

        return Redirect::route('order');
    }

    public function removeFromCart($id)
    {
        $userId = Auth::id();
        $cartItem = CartItem::where('id', $id)->where('user_id', $userId)->first();

        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->route('shopping.cart');
    }
}
