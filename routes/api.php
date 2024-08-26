<?php

use App\Http\Controllers\api\v1\CustomerController;
use App\Http\Controllers\api\v1\InvoiceController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\api\v1'], function () {
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoice', InvoiceController::class);
});