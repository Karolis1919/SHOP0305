<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showad(){

        $categories = Category::all();
        return view('admininfo.pages.newad', compact('categories'));
    }

    public function storeProduct(Request $request){

        $validatedData = $request->validate([
            'entitlement' => 'required',
            'info' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'cat_id' => 'required'
        ]);
        $products = Product::create([
            'entitlement' => request('entitlement'),
            'info' => request('info'),
            'quantity' => request('quantity'),
            'price' => request('price'),
            'cat_id' => request('cat_id'),
        ]);
        return redirect ('/allproducts');
    }

    public function allProducts(){
        $products = Product::all();

        return view('admininfo.pages.allproducts', compact('products'));
    }

    public function deleteProduct(Product $product){
        $product->delete();{

            return redirect('admininfo.pages.allproducts');
        }
    }


    public function updateProduct(Product $product, Request $request){
        $validatedData = $request->validate([
            'entitlement' => 'required',
            'info' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'cat_id' => 'required',
        ]);
        Product::where('id', $product->id)->update($request->except(['_token', 'img']));
        return redirect('/allproducts');
    }

    public function newOrder(){

        return view('admininfo.pages.neworder');
    }

}
