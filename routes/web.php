<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('user.index');
});


Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/product', [FrontendController::class, 'product']);
Route::get('/user-product', [ProductController::class, 'productUser']);
Route::get('/product-description/{id}', [ProductController::class, 'productDes']);

// search
Route::post('/search', [SearchController::class, 'search']);



Auth::routes();


Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/category', [FrontendController::class, 'category']);

    Route::get('/product', [FrontendController::class, 'product']);

    // product
    Route::post('/add-product', [ProductController::class, 'addProduct']);
    Route::get('/delete/{id}', [ProductController::class, 'delete']);
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/update-product/{id}', [ProductController::class, 'updateProduct']);

    // category
    Route::post('/category-create', [CategoryController::class, 'categoryCreate']);
    Route::get('/category-delete/{id}', [CategoryController::class, 'categoryDelete']);

    // order
    Route::get('/order', [FrontendController::class, 'order']);
});

Route::group(['middleware' => ['auth']], function () {

    // cart
    Route::get('/addCart/{id}', [CartController::class, 'store']);
    Route::get('/open-cart', [CartController::class, 'create']);
    Route::get('/destroy-cart/{id}', [CartController::class, 'destroy']);


    // checkout
    Route::get('/checkout', [CheckController::class, 'checkout']);
    Route::get('/place-order', [CheckController::class, 'placeOrder']);

    //order
    Route::post('/order', [OrderController::class, 'store']);
    Route::get('/order-details', [OrderController::class, 'orderDetails']);
    Route::get('/delete-details/{id}',[OrderController::class,'destroy']);
});
