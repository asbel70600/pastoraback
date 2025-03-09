<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubsidiaryRequest;
use App\Http\Resources\SubsidiaryResource;
use App\Models\Subsidiary;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SubsidiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subsidiaries = Subsidiary::paginate();

        return SubsidiaryResource::collection($subsidiaries);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubsidiaryRequest $request): Subsidiary
    {
        return Subsidiary::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Subsidiary $subsidiary): Subsidiary
    {
        return $subsidiary;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubsidiaryRequest $request, Subsidiary $subsidiary): Subsidiary
    {
        $subsidiary->update($request->validated());

        return $subsidiary;
    }

    public function destroy(Subsidiary $subsidiary): Response
    {
        $subsidiary->delete();

        return response()->noContent();
    }
}
