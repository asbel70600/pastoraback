<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

const renameMap = [
            "nombre" => "name",
            "centro" => "subsidiary_id",
            "salario" => "salary",
            "username" => "email",
            "password" => "password",
            "permisos" => "permissions"
        ];

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
            "username" => "required|regex:/[a-zA-Z0-9]+/|unique:\App\Models\User,email",
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

    public function update(Request $request)
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
            "id" => "required|exists:App\Models\User,id",
            "nombre" => "string",
            "centro" => "exists:App\Models\Subsidiary,id",
            "salario" => "numeric",
            "username" => "regex:/[a-zA-Z0-9]+/|unique:\App\Models\User,email",
            "password" => "string",
            "permisos" => "array",
        ]);

        $updated_user = User::whereId($val["id"])->first();

        if (isset($val["permisos"])){
            $permissions = $val["permisos"];
            $permissions = Permission::whereAny(['name'],'=',$val["permisos"])->pluck('id');
            $updated_user->permissions()->attach($permissions);
        }

        $sucess = $updated_user->update([
            "name" => $val["nombre"] ?? $updated_user->name,
            "subsidiary_id" => $val["centro"] ?? $updated_user->subsidiary_id,
            "salary" => $val["salario"] ?? $updated_user->salary,
            "email" => $val["username"] ?? $updated_user->email,
            "password" => $val["password"] ?? $updated_user->password,
        ]);

        if (!$sucess){
            return response([
                "error" => "no su pudo actualizar el usuario"
            ],304);
        }

        return response($updated_user->toJson());
    }

    public function destroy(Request $req): Response
    {
        $val = $req->validate([
            "id" => "required|exists:App\Models\User,id",
        ]);
        $u = User::whereId($val["id"])->firstOrFail();
        $u->update([
            "hidden" => true,
        ]);

        return response($u->toJson());
    }
}
