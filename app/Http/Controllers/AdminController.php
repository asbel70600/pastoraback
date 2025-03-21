<?php

namespace App\Http\Controllers;

use App\Models\Subsidiary;
use App\Models\User;
use App\Permissions;

class AdminController extends Controller
{
    function index(){
        $worker = User::all()->toArray();

        $worker = array_map(function($user){
            $user["subsidiary"] = Subsidiary::whereId($user["subsidiary_id"])->firstOrFail()->name;
            return $user;
        },$worker);

        $worker = array_map(function(User $user){
            $usermodel = User::whereId($user["id"])->firstOrFail();
            $user["permissions"] = $usermodel->permissions->pluck('name')->toArray();
            return $user;
        },$worker);

        $subs = Subsidiary::all();

        $resp = [
            "workers"=>$worker,
            "subsidiaries" => $subs,
        ];

        return response($resp,200);
    }

}
