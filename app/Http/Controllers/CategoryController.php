<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    //show all categories
    public function index(){

        $categories = Category::filter(request(['search','sort']))->simplePaginate(5)->withQueryString();
        return view('categories.index',[
            'categories' => $categories,
        ]);
    }


    //show single category
    public function show(Category $category){
        // $products = $category->products()->filter(request(['search','sort']))->paginate(5)->withQueryString();
        return view('categories.show',[
            'products' => $category->products()->paginate(5)->withQueryString(),
            'category' => $category,
        ]);
    }


    //show form to create category
    public function create(){
        return view('categories.create');
    }

    //create category
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
        ]);

        $category = new Category();
        $category->categoryName = $request->name;
        if(isset($request->description)){
            $category->description = $request->description;
        }

        $category->save();

        return redirect('/categories')->with('success','Category created successfully');
    }

    //show form to edit category
    public function edit(Category $category){
        return view('categories.edit',[
            'category' => $category,
        ]);
    }


    //update category
    public function update(Request $request, Category $category){

        $request->validate([
            'name' => 'required',
        ]);
        
        // $category = Category::find($category->id);

        $category->categoryName = $request->name;
        if(isset($request->description)){
            $category->description = $request->description;
        }

        $category->save();

        return redirect('/categories')->with('success','Category updated successfully');
    }


    //delete category
    public function destroy(Category $category){
        $category->delete();
        return redirect('/categories')->with('success','Category deleted successfully');
    }
}
