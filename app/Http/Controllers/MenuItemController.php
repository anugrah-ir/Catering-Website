<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuItemController extends Controller
{
    public function index()
    {
        $menuItems = Menu::all();
        return view('order', compact('menuItems'));
    }
}

