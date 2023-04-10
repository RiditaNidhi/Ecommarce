<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stocklist(){
        return view('backend.pages.stocks.stocklist');
    }
}
