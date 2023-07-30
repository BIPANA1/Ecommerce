<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryCreate(Request $request){
        $category =new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->back();
    
      }

      public function categoryDelete($id)
      {
        $data = Category::where('id', $id)->first();
        $data->delete();
        return redirect()->back();
      }
}
