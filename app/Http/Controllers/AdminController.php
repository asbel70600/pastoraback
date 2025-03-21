<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Subsidiary;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class AdminController extends Controller
{
    function index(){
        $worker = User::all()->toArray();

        $worker = array_map(function($user){
            $user["subsidiary"] = Subsidiary::whereId($user["subsidiary_id"])
                ->firstOrFail()
                ->name;
            return $user;
        },$worker);

        $worker = array_map(function($user){
            $all_perm = array();

            foreach (Permission::all()->unique()->pluck("name") as $p) {
                $all_perm[$p] = false;
            }

            $user_perm = User::whereId($user["id"])
                ->firstOrFail()
                ->permissions
                ->pluck('name')
                ->toArray();

            foreach ($user_perm as $p) {
                $all_perm[$p] = true;
            }

            $user["permisos"] = $all_perm;

            return $user;
        },$worker);

        $subs = Subsidiary::all();

        $resp = [
            "workers"=>$worker,
            "subsidiaries" => $subs,
        ];

        return response($resp,200);
    }

    function edit_user(Request $req){

    }

}
