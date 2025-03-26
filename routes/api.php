<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SubsidiaryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'attempt']);
Route::get(
    'images/{name}', function (string $name) {
        echo asset('storage/'.$name);
    }
);

Route::get('products', [ProductController::class, 'index'])->middleware('auth:sanctum');
Route::post('products', [ProductController::class, 'create'])->middleware('auth:sanctum');
Route::post('products/editar', [ProductController::class, 'update'])->middleware('auth:sanctum');
Route::delete('products', [ProductController::class, 'delete'])->middleware('auth:sanctum');

Route::post('sale', [SaleController::class,'store'])->middleware('auth:sanctum');


Route::get('admin', [AdminController::class,'index'])->middleware('auth:sanctum');

Route::post('trabajadores', [UserController::class,'store'])->middleware('auth:sanctum');
Route::patch('trabajadores', [UserController::class,'update'])->middleware('auth:sanctum');
Route::delete('trabajadores', [UserController::class,'destroy'])->middleware('auth:sanctum');

Route::post('centros', [SubsidiaryController::class,'store'])->middleware('auth:sanctum');
Route::delete('centros', [SubsidiaryController::class,'destroy'])->middleware('auth:sanctum');

/*Route::get*/

Route::get(
    'logout', function (Request $request) {
        $request->session()->invalidate();
        $request->session()->flush();
    }
)->middleware('auth:sanctum');

Route::get(
    'eso', function () {
        return view("index");
    }
);

