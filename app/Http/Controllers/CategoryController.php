<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function categorylist(){
$categories=Category::all();
    return view('backend.pages.categories.categoryList',compact('categories'));
   }
   public function categoryform(){
   
    return view('backend.pages.categories.categoryForm');
   }

   public function categorystore(Request $request){
      Category::create([
         'name'=>$request->name,
         'type'=>$request->type
      ]);
      toastr()->success('Category Added ');
      return back();
   }

}
