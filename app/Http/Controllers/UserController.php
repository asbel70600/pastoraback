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
    public function store(Request $request)
    {
        // TODO: Add auth check
        /*if (Auth::user()->cannot('create',User::class)){*/
        /*    abort(403);*/
        /*}*/

        /*$permission_list = array_reduce(Permissions::cases(),function($carry,$item){*/
        /*    return $carry."$item,";*/
        /*});*/
        /*"permisos" => "array|contains:$permission_list",*/

        // TODO: Validate permission_list
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
    }

    public function update(Request $request, $user_id)
    {
       // TODO: Add auth check
        /*if (Auth::user()->cannot('create',User::class)){*/
        /*    abort(403);*/
        /*}*/

        /*$permission_list = array_reduce(Permissions::cases(),function($carry,$item){*/
        /*    return $carry."$item,";*/
        /*});*/
        /*"permisos" => "array|contains:$permission_list",*/

        $user = User::whereId($user_id);
        if (!$user){
            return response([
                "error" => "El usuario a modificar no exitste"
            ],304);
        }

        // TODO: Validate permission_list
        $val = $request->validate([
            "id" => "required|exists:App\Models\User,id",
            "nombre" => "string",
            "centro" => "exists:App\Models\Subsidiary,id",
            "salario" => "numeric",
            "username" => "regex:/[a-zA-Z0-9]+/",
            "password" => "string",
            "permisos" => "array",
        ]);

        Log::alert($val["permisos"]);

        $updated_user = User::whereId($val["id"])->firstOrFail();

        $sucess = $updated_user->update([
            "name" => $val["nombre"],
            "subsidiary_id" => $val["centro"],
            "salary" => $val["salario"],
            "email" => $val["username"],
            "password" => $val["password"],
        ]);

        $permissions = Permission::whereAny(['name'],'=',$val["permisos"])->pluck('id');

        if (!$sucess){
            return response([
                "error" => "no su pudo actualizar el usuario"
            ],304);
        }

        $updated_user->permissions()->attach($permissions);
        $sucess = $updated_user->save();

        if (!$sucess){
            return response([
                "error" => "no su pudo actualizar el usuario"
            ],304);
        }

        return response($updated_user->toJson(),200);
    }

    public function destroy(User $user): Response
    {
        $user->delete();

        return response()->noContent();
    }
}
