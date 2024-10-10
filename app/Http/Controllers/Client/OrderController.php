<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Orders;

class OrderController extends Controller
{
    public function index()
    {
        $user_orders = Orders::where('user_id', Auth::id())->first();
        if (!$user_orders) {
            return redirect()->route('home');
        }
        return view('Client.Order.index', compact('user_orders'));
    }
    public function show($id)
    {
        $order = Orders::find($id);
        return view('Client.Order.show', compact('order'));
    }
}
