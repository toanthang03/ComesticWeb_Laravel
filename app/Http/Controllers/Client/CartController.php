<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carts;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use MongoDB\Model\BSONArray;
use App\Models\Orders;

class CartController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $cart = Carts::where('user_id', Auth::id())->first();
        if (!$cart) {
            return view('Client.Cart.notAvailable');
        }
        return view('Client.Cart.Index', compact('cart', 'products'));
    }
    public function add(Request $request)
    {
        $pro = Products::find($request->product_id);
        $product = [
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $pro->price
        ];
        $cart = Carts::firstOrCreate(['user_id' => Auth::id()]);
        $cart->addToCart($product);
        return redirect()->route('cart');
    }
    //kiểm tra funtion remove và removeFromCart trong model
    public function remove(Request $request)
    {
        $cart = Carts::where('user_id', Auth::id())->first();
        $cart->removeFromCart($request->product_id);
        return redirect()->route('cart');
    }
    public function updateQuantity(Request $request)
    {
        $cart = Carts::where('user_id', Auth::id())->first();
        $cart->updateQuantity($request->product_id, $request->quantity);
        return redirect()->route('cart');
    }
}
