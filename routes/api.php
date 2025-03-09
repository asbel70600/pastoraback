<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('login', [LoginController::class, 'attempt']);
Route::get('images/{name}', function (string $name) {
    echo asset('storage/'.$name);
});

Route::get('ventas', [ProductController::class, 'index'])->middleware('auth:sanctum');
Route::post('ventas', [ProductController::class, 'create'])->middleware('auth:sanctum');
Route::post('ventas/editar', [ProductController::class, 'update'])->middleware('auth:sanctum');
Route::delete('ventas', [ProductController::class, 'delete'])->middleware('auth:sanctum');


Route::get('admin',[AdminController::class,'index'])->middleware('auth:sanctum');

Route::get('logout', function(Request $request){
    $request->session()->invalidate();
    $request->session()->flush();
})->middleware('auth:sanctum');

Route::get('eso', function(){
    return view("index");
});

