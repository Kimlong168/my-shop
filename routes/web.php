<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//------------------dashboard--------------------
Route::get('/dashboard', function () {
    // $product = count(Product::all());
    // $category = count(Category::all());
    // $product = Product::all()->count();
    // $category = Category::all()->count();
    return view('dashboard',[
        'product' => Product::count(),
        'category' => Category::count(),
        'user' => User::count(),
    ]);
})->middleware('auth');;


//-----------------products---------------------

//show all products
Route::get('/products', [ProductController::class,'index'])->name('products.index')->middleware('auth');;

//show form to create product
Route::get('/products/create', [ProductController::class,'create'])->name('products.create')->middleware('auth');;

//create product
Route::post('/products', [ProductController::class,'store'])->name('products.store')->middleware('auth');;

//show form to edit product
Route::get('/products/{product}/edit', [ProductController::class,'edit'])->name('products.edit')->middleware('auth');;

//update product
Route::put('/products/{product}', [ProductController::class,'update'])->name('products.update')->middleware('auth');;

//show single product
Route::get('/products/{product}', [ProductController::class,'show'])->name('products.show')->middleware('auth');;

//delete product
Route::delete('/products/{product}', [ProductController::class,'destroy'])->name('products.delete')->middleware('auth');;


//-----------------categories---------------------

//show all categories
Route::get('/categories', [CategoryController::class,'index'])->name('categories.index')->middleware('auth');;

//show form to create category
Route::get('/categories/create', [CategoryController::class,'create'])->name('categories.create')->middleware('auth');;

//create category
Route::post('/categories', [CategoryController::class,'store'])->name('categories.store')->middleware('auth');;

//show form to edit category
Route::get('/categories/{category}/edit', [CategoryController::class,'edit'])->name('categories.edit')->middleware('auth');;

//update category
Route::put('/categories/{category}', [CategoryController::class,'update'])->name('categories.update')->middleware('auth');;

//delete category
Route::delete('/categories/{category}', [CategoryController::class,'destroy'])->name('categories.delete')->middleware('auth');;

//show single category
Route::get('/categories/{category}', [CategoryController::class,'show'])->name('categories.show')->middleware('auth');;

//-----------------users---------------------

//show all users
Route::get('/users', [UserController::class,'index'])->name('users.index')->middleware('auth');

//show form to register
Route::get('/register',[UserController::class,'create'])->middleware('auth');

//register user
Route::post('/users',[UserController::class,'store'])->middleware('auth');

//show form to login
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate',[UserController::class,'authenticate']);

//logout user
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//delete user
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.delete')->middleware('auth');

//-----------------frontend-home---------------------

//home - show all products
Route::get('/', [HomeController::class,'index'])->name('home.index');


//shop - show all products
Route::get('/shop', [HomeController::class,'shop'])->name('home.shop');

//shop - show product detail
Route::get('/shop/{product}', [HomeController::class,'show'])->name('home.show');

//about
Route::get('/contact', function(){
    return view('frontend.contact.index');
})->name('home.contact');