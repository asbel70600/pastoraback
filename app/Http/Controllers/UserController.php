<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\User;
use App\Permissions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

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
    public function store(Request $request):Response
    {
        if (Auth::user()->cannot('create', User::class)) {
            abort(403);
        }


        $val = $request->validate(
            [
            "nombre" => "required|string",
            "centro" => "required|exists:App\Models\Subsidiary,id",
            "salario" => "required|numeric",
            "username" => "required|regex:/[a-zA-Z0-9]+/|unique:\App\Models\User,email",
            "password" => "required|string",
            "permisos" => "required",
            ]
        );

        $new_user = new User(
            [
            "name" => $val["nombre"],
            "subsidiary_id" => $val["centro"],
            "salary" => $val["salario"],
            "email" => $val["username"],
            "password" => $val["password"],
            ]
        );

        if (isset($val["permisos"])) {
            $permissions = array_map(fn ($case) => $case->name, Permissions::cases());

            if (array_diff(array_keys($val["permisos"]), array_values($permissions)) != []) {
                return response(
                    [
                    "message" => "Malformed request permissions"
                    ], 422
                );
            }

            $permissions = Permission::whereAny(['name'], '=', $val["permisos"])->pluck('id');
            $new_user->permissions()->attach($permissions);
        }

        $new_user->save();
        return response($new_user->toJson(), 200);
    }

    public function update(Request $request):Response
    {
        if (Auth::user()->cannot('update', User::class)) {
            abort(403);
        }

        $val = $request->validate(
            [
            "id" => "required|exists:App\Models\User,id",
            "nombre" => "string",
            "centroId" => "exists:App\Models\Subsidiary,id",
            "salario" => "numeric",
            "username" => "string",
            "password" => "string",
            "permisos" => "array",
            ]
        );

        $updated_user = User::whereId($val["id"])->firstOrFail();
        $updated_user->name = $val["nombre"] ?? $updated_user->name;
        $updated_user->subsidiary_id = $val["centro"] ?? $updated_user->subsidiary_id;
        $updated_user->salary = $val["salario"] ?? $updated_user->salary;
        $updated_user->email = $val["username"] ?? $updated_user->email;

        if(isset($val["username"]) && $val["username"] != $updated_user->email) {
            if (!User::whereEmail($val["username"])->exists) {
                $updated_user->email = $val["username"];
            } else {
                return response(["message" => "El nombre de usuario ya está en uso"], 422);
            }
        }
        if(isset($val["password"])) {
            $updated_user->password = Hash::make($val["password"]);
        }

        if (isset($val["permisos"])) {
            $permissions = array_map(fn ($case) => $case->name, Permissions::cases());

            if (array_diff(array_keys($val["permisos"]), array_values($permissions)) != []) {
                return response(
                    [
                    "message" => "Malformed request permissions"
                    ], 422
                );
            }

            $permissions = Permission::whereAny(['name'], '=', $val["permisos"])->pluck('id');
            $updated_user->permissions()->attach($permissions);
        }

        $updated_user->save();

        return response($updated_user->toJson());
    }

    public function destroy(Request $req): Response
    {
        if (Auth::user()->cannot('delete', User::class)) {
            abort(403);
        }

        $val = $req->validate(
            [
            "id" => "required|exists:App\Models\User,id",
            ]
        );

        $u = User::whereId($val["id"])->firstOrFail();
        $u->update(
            [
            "hidden" => true,
            ]
        );

        return response($u->toJson());
    }
}
