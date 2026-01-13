<?php

use Illuminate\Support\Facades\Route;

//import dari produk controller
use App\Http\Controllers\ProductController;

// route resource untuk produk
Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('index');
});
