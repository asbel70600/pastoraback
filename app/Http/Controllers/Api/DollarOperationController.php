<?php

namespace App\Http\Controllers\Api;

use App\Models\DollarOperation;
use Illuminate\Http\Request;
use App\Http\Requests\DollarOperationRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\DollarOperationResource;

class DollarOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $dollarOperations = DollarOperation::paginate();

        return DollarOperationResource::collection($dollarOperations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DollarOperationRequest $request): DollarOperation
    {
        return DollarOperation::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(DollarOperation $dollarOperation): DollarOperation
    {
        return $dollarOperation;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DollarOperationRequest $request, DollarOperation $dollarOperation): DollarOperation
    {
        $dollarOperation->update($request->validated());

        return $dollarOperation;
    }

    public function destroy(DollarOperation $dollarOperation): Response
    {
        $dollarOperation->delete();

        return response()->noContent();
    }
}
