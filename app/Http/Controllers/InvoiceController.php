<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoicelist(){
        return view('backend.pages.invoice.invoicelist');
    }
}
