<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Http\Resources\PermissionResource;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $permissions = Permission::paginate();

        return PermissionResource::collection($permissions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request): Permission
    {
        return Permission::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission): Permission
    {
        return $permission;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, Permission $permission): Permission
    {
        $permission->update($request->validated());

        return $permission;
    }

    public function destroy(Permission $permission): Response
    {
        $permission->delete();

        return response()->noContent();
    }
}
