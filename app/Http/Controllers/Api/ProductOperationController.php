<?php

namespace App\Http\Controllers\Api;

use App\Models\ProductOperation;
use Illuminate\Http\Request;
use App\Http\Requests\ProductOperationRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductOperationResource;

class ProductOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $productOperations = ProductOperation::paginate();

        return ProductOperationResource::collection($productOperations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductOperationRequest $request): ProductOperation
    {
        return ProductOperation::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductOperation $productOperation): ProductOperation
    {
        return $productOperation;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductOperationRequest $request, ProductOperation $productOperation): ProductOperation
    {
        $productOperation->update($request->validated());

        return $productOperation;
    }

    public function destroy(ProductOperation $productOperation): Response
    {
        $productOperation->delete();

        return response()->noContent();
    }
}
