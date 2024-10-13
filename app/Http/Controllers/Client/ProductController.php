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

        //Search
        if ($request->has('search')) {
            $search = $request->search;
            $query->where('name', 'like', '%' . $search . '%');
        }
        //Lấy sản phẩm theo loại
        if ($request->has('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }
        //Sắp xếp theo giá
        if ($request->has('sort_by') && $request->has('sort_order')) {
            $query->orderBy($request->sort_by, $request->sort_order);
        }
        //paginate
        $products = $query->paginate(6);
        
        return view('Client.Product.index', compact('products'));
    }

    //Phương thức xem chi tiết sản phẩm theo id
    public function detail($id)
    {
        $products = Products::find($id);
        $product = Products::where('category_id', $products->category_id)
            ->where('_id', '!=', $id)
            ->take(6)
            ->get();
        return view('Client.Product.detail', compact('products', 'product'));
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
