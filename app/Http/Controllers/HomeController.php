<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{   
    //home - show all products
    public function index(){ 
        return view('frontend.home.index',[
            'categories' => Category::orderBy('categoryName','ASC')->get(),
        ]);
    }

    //shop - show all product
    public function shop(){
        $product = Product::filter(request(['search','filter','sort']))->paginate(12)->withQueryString();
        return view('frontend.shop.index',[
            'products' => $product,
            'categories' => Category::all(),
        ]);
    }

    //shop - show product detail
    public function show(Product $product){
       
        return view('frontend.shop.show',[
            'product' => $product,
            'previous' => url()->previous(),
        ]);
    }
}
