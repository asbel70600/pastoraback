<?php

namespace App\Http\Controllers\Api;

use App\Models\BillOperation;
use Illuminate\Http\Request;
use App\Http\Requests\BillOperationRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\BillOperationResource;

class BillOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $billOperations = BillOperation::paginate();

        return BillOperationResource::collection($billOperations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BillOperationRequest $request): BillOperation
    {
        return BillOperation::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(BillOperation $billOperation): BillOperation
    {
        return $billOperation;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BillOperationRequest $request, BillOperation $billOperation): BillOperation
    {
        $billOperation->update($request->validated());

        return $billOperation;
    }

    public function destroy(BillOperation $billOperation): Response
    {
        $billOperation->delete();

        return response()->noContent();
    }
}
