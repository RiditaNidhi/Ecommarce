<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\StockController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'home']);




Route::get('/product/table',[ProductController::class,'productlist'])->name('product.list');
Route::get('/product/form',[ProductController::class,'productform'])->name('product.form');
Route::post('/product/store',[ProductController::class,'productStore'])->name('product.store');


Route::get('/customer/list',[CustomerController::class,'customer'])->name('customer.list');
Route::get('/customer/form',[CustomerController::class,'customerform'])->name('customer.form');
Route::post('/customer/store',[CustomerController::class,'customerstore'])->name('customer.store');
Route::get('/customer/delete/{id}',[CustomerController::class,'customerDelete'])->name('customer.delete');


Route::get('/category/list',[CategoryController::class,'categorylist'])->name('category.list');
Route::get('/category/form',[CategoryController::class,'categoryform'])->name('category.form');
Route::post('/category/store',[CategoryController::class,'categorystore'])->name('category.store');



Route::get('/order/list',[OrderController::class,'orderlist'])->name('order.list');
Route::get('/order/form',[OrderController::class,'orderform'])->name('order.form');
Route::post('/order/store',[OrderController::class,'orderstore'])->name('order.store');


Route::get('/ord_details/list',[OrderController::class,'ord_detaillist'])->name('ord_detaillist');
Route::get('/ord_details/form',[OrderController::class,'ord_detailform'])->name('ord_detailform');
Route::post('/ord_details/store',[OrderController::class,'ord_detailstore'])->name('ord_detail.store');


Route::get('/payment/list',[PaymentController::class,'paylist'])->name('pay.list');
Route::get('/payment/form',[PaymentController::class,'payform'])->name('pay.form');
Route::post('/payment/store',[PaymentController::class,'paystore'])->name('pay.store');


Route::get('/invoice/list',[InvoiceController::class,'invoicelist'])->name('invoice.list');

Route::get('/stock/list',[StockController::class,'stocklist'])->name('stock.list');