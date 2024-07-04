<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

Route::get('/get_all_invoice',[InvoiceController::class,'getAllInvoices']);
Route::get('/search_invoice',[InvoiceController::class,'searchInvoice']);
Route::get('/create_invoice',[InvoiceController::class,'createInvoice']);
Route::get('/customers',[CustomerController::class,'allCustomers']);
Route::get('/prodcuts',[ProductController::class,'allProdcuts']);
Route::post('/add_invoice',[InvoiceController::class,'addInvoice']);
Route::get('/show_invoice/{id}',[InvoiceController::class,'showInvoice']);
Route::get('/edit_invoice/{id}',[InvoiceController::class,'editInvoice']);
Route::get('/delete_invoice_items/{id}',[InvoiceController::class,'deleteInvoiceItems']);
Route::post('/update_invoice/{id}',[InvoiceController::class,'updateInvoice']);
Route::get('/delete_invoice/{id}',[InvoiceController::class,'deleteInvoice']);
