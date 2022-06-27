<?php
use Illuminate\Http\Request;
use Sandeep\Contact\Http\Controllers\contactController;



// Route::get('/',[ProductController::class,'products_get']);
Route::get('contact',[contactController::class,'index'])->name('contact');

Route::post('contact',[contactController::class,'send']);

