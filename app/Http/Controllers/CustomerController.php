<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    {
        //dd('thik jaygay asi');
       $customers = Customer::all();
        return view('backend.pages.customer.customerTable',compact('customers'));
    }
    
    public function customerform(){
        return view('backend.pages.customer.customerForm');
    }
    public function customerstore(Request $request){

        //dd($request->all());

        Customer::create([
      'name'=>$request->name,
      'email'=>$request->email,
      'contact'=>$request->contact,
      'address'=>$request->address

        ]);
        return back();
    }
    public function customerDelete($id){
        $customerDelete =  Customer::find($id);
    $customerDelete->delete();

    toastr()->success('Deleted');

    return back();


    }
}
