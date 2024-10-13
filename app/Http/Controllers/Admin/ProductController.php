<?php

namespace App\Http\Controllers\Admin;

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
        //paginate
        $products = $query->paginate(6);
        return view('Admin.Product.index', compact('products'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('get')) {
            $categories = Categories::all();
            return view('Admin.Product.addProduct', compact('categories'));
        } else if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|max:255',
                'price' => 'required|numeric|int',
                'brand' => 'required|max:255',
                'origin' => 'required|max:255',
                'category_id' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            //Dữ liệu cho bảng product
            $product = new Products();
            $product->name = $request->name;
            $product->price = (int)$request->price;
            $product->category_id = $request->category_id;
            $product->description = $request->description;
            $product->origin = $request->origin;
            $product->brand = $request->brand;

            //image
            $file_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('/img'), $file_name);
            $product->image = $file_name;
            $product->save();
            return redirect()->route('product.show');
        }
    }

    //Sửa sản phẩm
    public function edit(Request $request, $id)
    {
        $product = Products::find($id);
        if (!$product) {
            // $previousUrl = url()->previous();
            // return view('404', compact('previousUrl'));
            return view('404');
        }
        if ($request->isMethod('get')) {
            $categories = Categories::all();
            return view('Admin.Product.editProduct', compact('product', 'categories'));
        } else if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|max:255',
                'price' => 'required|numeric|int',
                'brand' => 'required|max:255',
                'origin' => 'required|max:255',
                'category_id' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072',
            ]);
            $request->merge(['price' => (int)$request->price]);
            $product->update($request->all());
            if ($request->hasFile('image')) {
                $img = $product->image;
                $url = public_path('img/' . $img);
                if (file_exists($url)) {
                    unlink($url);
                }
                $file_name = time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('/img'), $file_name);
                $product->image = $file_name;
                $product->save();
            }
            return redirect()->route('product.show');
        }
    }

    //Xóa sản phẩm
    public function destroy($id)
    {
        $product = Products::find($id);
        if (!$product) {
            // $previousUrl = url()->previous();
            // return view('404', compact('previousUrl'));
            return view('404');
        }
        $img = $product->image;
        $url = public_path('img/' . $img);
        if (file_exists($url)) {
            unlink($url);
        }
        $product->delete();
        return redirect()->route('product.show');
    }
}
