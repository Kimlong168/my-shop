<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{

    //show all products
    public function index()
    {   
        $products = Product::filter(request(['search','filter','sort']))->paginate(5)->withQueryString();
        return view('products.index',[
            'products' => $products,
            'categories' => Category::all(),
        ]);
        
    }


    //show single product
    public function show(Product $product)
    {
        return view('products.show',[
            'product' => $product
        ]);
    }


    //show form to create product
    public function create ()
    {
        $categories = Category::all();
        return view('products.create',[
            'categories' => $categories
        ]);
    }

    //create product
    public function store(Request $request){

       $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'isAvailable' => 'required'
        ]);

        $product = new Product();
        $product->productName = $request->name;
        $product->price = $request->price; 
        $product->description = $request->description;
        if($request->hasFile('image')){
            $product->image = $request->file('image')->store('images', 'public');
        }
        $product->category_id = $request->category;
        $product->isAvailable = $request->isAvailable;
        $product->save();

        return redirect()->route('products.create')->with('success','Product created successfully.');
    }


    //show form to edit product
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit',[
            'product' => $product,
            'categories' => $categories
        ]);
    }


    //update product
    public function update(Request $request,Product $product){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'isAvailable' => 'required'
        ]);


        $product = Product::find($product->id);

        $product->productName = $request->name;
        $product->price = $request->price; 
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->isAvailable = $request->isAvailable;
        if($request->hasFile('image')){
            $product->image = $request->file('image')->store('images', 'public');
        }
        $product->save();

        return redirect()->route('products.index')->with('success','Product updated successfully.');
    }   


    //delete product
    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('success','Product deleted successfully.');
    }
}
