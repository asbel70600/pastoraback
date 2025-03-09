<?php

namespace App\Http\Controllers;

use App\Http\Requests\DollarStockRequest;
use App\Http\Resources\DollarStockResource;
use App\Models\DollarStock;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DollarStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dollarStocks = DollarStock::paginate();

        return DollarStockResource::collection($dollarStocks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DollarStockRequest $request): DollarStock
    {
        return DollarStock::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(DollarStock $dollarStock): DollarStock
    {
        return $dollarStock;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DollarStockRequest $request, DollarStock $dollarStock): DollarStock
    {
        $dollarStock->update($request->validated());

        return $dollarStock;
    }

    public function destroy(DollarStock $dollarStock): Response
    {
        $dollarStock->delete();

        return response()->noContent();
    }
}
