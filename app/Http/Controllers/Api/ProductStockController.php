<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductStock;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStockRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductStockResource;

class ProductStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $productStocks = ProductStock::paginate();

        return ProductStockResource::collection($productStocks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStockRequest $request): ProductStock
    {
        return ProductStock::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductStock $productStock): ProductStock
    {
        return $productStock;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductStockRequest $request, ProductStock $productStock): ProductStock
    {
        $productStock->update($request->validated());

        return $productStock;
    }

    public function destroy(ProductStock $productStock): Response
    {
        $productStock->delete();

        return response()->noContent();
    }
}
