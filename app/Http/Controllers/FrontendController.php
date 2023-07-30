<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\orderDetails;
use App\Models\Product;
use Carbon\Carbon;

class FrontendController extends Controller

{


  public function category(){
    $categories = Category::all();
    return view('admin.category',compact('categories'));
  }

  public function product()
  {
    $products = Product::all();
    $categories = Category::all();
    return view('admin.product', compact('products','categories'));
  }

  public function order(){
    $order_details = orderDetails::latest()->get();
    $orders = Order::latest()->get();
    return view('admin.order',compact('orders','order_details'));
  }
  
}
