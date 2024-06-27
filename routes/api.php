<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, "index"]);
    
    Route::post('add-category', [CategoryController::class, "store"]);
});
