<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\Permission;
use App\Models\User;
use App\Permissions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::paginate();

        return UserResource::collection($users);
    }

    public function store(Request $request): User
    {
        /*if (Auth::user()->cannot('create',User::class)){*/
        /*    abort(403);*/
        /*}*/

        /*$permission_list = array_reduce(Permissions::cases(),function($carry,$item){*/
        /*    return $carry."$item,";*/
        /*});*/
        /*"permisos" => "array|contains:$permission_list",*/

        $val = $request->validate([
            "nombre" => "required|string",
            "centro" => "required|exists:App\Models\Subsidiary,id",
            "salario" => "required|numeric",
            "username" => "required|regex:/[a-zA-Z0-9]+/",
            "password" => "required|string",
            "permisos" => "required",
        ]);

        Log::alert($val["permisos"]);

        $new_user = new User([
            "name" => $val["nombre"],
            "subsidiary_id" => $val["centro"],
            "salary" => $val["salario"],
            "email" => $val["username"],
            "password" => $val["password"],
        ]);

        $permissions = Permission::whereAny(['name'],'=',$val["permisos"])->pluck('id');

        $new_user->permissions()->attach($permissions);
        $new_user->save();

        return User::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): User
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user): User
    {
        $user->update($request->validated());

        /*$val = $request->validate([*/
        /*    "id" => "",*/
        /*    "nombre" => "",*/
        /*    "centro" => "",*/
        /*    "salario" => "",*/
        /*    "username" => "",*/
        /*    "contrasenna" => "",*/
        /*    "permisos" => "",*/
        /*]);*/
        return $user;
    }

    public function destroy(User $user): Response
    {
        $user->delete();

        return response()->noContent();
    }
}
