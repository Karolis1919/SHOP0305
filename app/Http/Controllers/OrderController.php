<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showAll(){
        $orders = Order::all();
            return view('admininfo.pages.orders', compact('orders'));
    }

    public function addOrder(Request $request){

        $validatedData = $request->validate([
            'ident' => 'required',
            'progress' => 'required',
        ]);
        $orders = Order::create([
            'ident' => request('ident'),
            'progress' => request('progress'),
        ]);
        return redirect ('/orders');
    }
}
