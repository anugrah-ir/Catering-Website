<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\pdf; // Menggunakan direktif use sesuai permintaan Anda

class InvoiceController extends Controller
{
    public function generatePDF()
    {
        
        $cartItems = session()->get('cartItems', []);

        // Buat HTML invoice
        $html = view('invoice', compact('cartItems'))->render();

        // Buat PDF dari HTML
        $pdf = PDF::loadHTML($html);

        // Unduh PDF
        return $pdf->download('invoice.pdf');
    }
}
