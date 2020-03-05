<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showcat()
    {
        return view('admininfo.pages.newcat');
    }

    public function storeCategory(Request $request){
        $validatedData = $request->validate([
            'title' => 'required'
        ]);
        $category = Category::create([
            'title' => request('title')
        ]);
        return redirect ('/home');
    }
}
