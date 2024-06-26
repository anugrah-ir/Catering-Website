<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\pdf; // Menggunakan direktif use sesuai permintaan Anda
use App\Models\CartItem;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{
    public function generatePDF()
    {
        $userId = Auth::id();
        $cartItems = CartItem::with('menu')->where('user_id', $userId)->get();
        $user = Auth::user();

        // Buat HTML invoice
        $html = view('invoice', compact('cartItems', 'user'))->render();

        // Buat PDF dari HTML
        $pdf = PDF::loadHTML($html);

        // Unduh PDF
        return $pdf->download('invoice.pdf');
    }
}
