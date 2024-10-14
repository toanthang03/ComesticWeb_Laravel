<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy 6 sản phẩm có giá cao nhất
        $products = Products::orderBy('price', 'desc') // Sắp xếp theo giá giảm dần
            ->take(6)// Giới hạn lấy 6 sản phẩm
            ->get();
        return view('Client.Home.index', compact('products'));
    }
}
