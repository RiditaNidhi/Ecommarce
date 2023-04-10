<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paylist(){
        $payments = Payment::all();
        return view('backend.pages.payments.payList',compact('payments'));
    }
    public function payform(){
        return view('backend.pages.payments.payform');


    }


    public function paystore(Request $request){
        Payment::create([
            'customer_id'=>$request->customer_id,
            'order_id'=>$request->order_id,
            'amount'=>$request->amount,
            'method'=>$request->method
            
        ]);
        return back();

    }
}
