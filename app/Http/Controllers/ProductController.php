<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productform()
    {
        
        return view('backend.pages.product.productForm');
    }
    public function productlist()
    {
        //dd('thik jaygay asi');

        $products= Product::all();
        return view('backend.pages.product.productList',compact('products'));
    }
    public function productStore (Request $request){
        Product::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'description'=>$request->description,
            'size'=>$request->size,
            'image'=>$request->image,
            'color'=>$request->color,
            'quantity'=>$request->quantity,
            'price'=>$request->price
        ]);
        toastr()->success('Category Added ');
        return back();
    }


   
}
