<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillStockRequest;
use App\Http\Resources\BillStockResource;
use App\Models\BillStock;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BillStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $billStocks = BillStock::paginate();

        return BillStockResource::collection($billStocks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BillStockRequest $request): BillStock
    {
        return BillStock::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(BillStock $billStock): BillStock
    {
        return $billStock;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BillStockRequest $request, BillStock $billStock): BillStock
    {
        $billStock->update($request->validated());

        return $billStock;
    }

    public function destroy(BillStock $billStock): Response
    {
        $billStock->delete();

        return response()->noContent();
    }
}
