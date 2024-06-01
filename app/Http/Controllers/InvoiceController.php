<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\pdf; // Menggunakan direktif use sesuai permintaan Anda

class InvoiceController extends Controller
{
    public function generatePDF()
    {
        
        $data = [];

        
        $pdf = pdf::loadView('invoice', $data);

        
        return $pdf->download('invoice.pdf');
    }
}
