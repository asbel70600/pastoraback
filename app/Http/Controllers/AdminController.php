<?php

namespace App\Http\Controllers;

use App\Models\Subsidiary;
use App\Models\User;

class AdminController extends Controller
{
    function index(){
        $worker = User::all()->toArray();


        $worker = array_map(function($user){
            $user["subsidiary"] = Subsidiary::whereId($user["subsidiary_id"])->firstOrFail()->name;
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
