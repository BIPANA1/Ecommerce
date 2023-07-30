<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $products = product::where('name', 'like', '%'.$request->search.'%')->orwhere('description', 'like', '%'.$request->search.'%')->get();
        return view('user.product',compact('products'));
    }
}
