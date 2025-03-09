<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductOperationRequest;
use App\Http\Resources\ProductOperationResource;
use App\Models\ProductOperation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
