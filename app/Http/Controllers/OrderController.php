<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function orderlist(){

     $orders= Order::all();
    return view('backend.pages.orders.orderList',compact('orders'));
   }
   public function orderform(){
    return view('backend.pages.orders.orderForm');
   }

   public function orderstore(Request $request){
      Order::create([
         'user_id'=>$request->user_id,
         'pay_id'=>$request->pay_id
      ]);
      return redirect()->route('order.list');
   }
   

   public function ord_detaillist(){
      $ord_details= OrderDetail::all();

    return view('backend.pages.ord_details.ord_detailList',compact('ord_details'));
   }

   public function ord_detailform(){
    return view("backend.pages.ord_details.ord_detailForm");
   }

   public function ord_detailstore(Request $request){
      OrderDetail::create([
         'product_id'=>$request->product_id,
         'quantity'=>$request->quantity,
         'unit_price'=>$request->unit_price,
         'pay_method'=>$request->method,
         'date'=>$request->date


      ]);
      return back();
   }
}
