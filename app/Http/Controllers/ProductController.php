<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    // create product
    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('Image/'), $filename);
        }
        $product->image = 'Image/' . $filename;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->back();
    }

    //   Delete product

    public function delete($id)
    {
        $data = Product::where('id', $id)->first();
        $data->delete();
        return redirect()->back();
    }
    //   Bring data to frontend edit page

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit', compact('product'));
    }

    //  To update data

    public function updateProduct($id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('Image/'), $filename);
            $product->image = 'Image/' . $filename;
        }
        $product->description = $request->description;
        $product->update();
        return redirect('product');
    }


    public function productUser()
    {
        $products = Product::all();
        // $categories = Category::all();

        return view('user.product',compact('products'));
    
    }
    public function productDes($id)
    {
        $product = Product::find($id);
        return view('user.productDes',compact('product'));
    }
}
