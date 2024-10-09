<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        //Lấy toàn bộ dữ liệu
        $query = Products::query();

        //Lấy sản phẩm theo loại
        if ($request->has('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }
        $products = $query->get();

        return view('Client.Product.index', compact('products'));

    }

    //Phương thức xem chi tiết sản phẩm theo id
    public function detail($id)
    {
        $products = Products::find($id);
        $product = Products::where('category_id', $products->category_id)
            ->where('_id', '!=', $id)
            ->take(5)
            ->get();
        $category = Categories::find($products->category_id);
        return view('Client.Product.detail', compact('products'));
    }
    public function getCategory()
    {
        $categories = Categories::all();
        // Chia sẻ dữ liệu với tất cả các views
        view()->share([
            'categories' => $categories
        ]);
    }

}
