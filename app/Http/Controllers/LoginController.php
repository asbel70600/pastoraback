<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function attempt(Request $request)
    {
        $credentials = request()->validate([
            'email' => 'required|string',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $resp = [];
            $resp['username'] = Auth::user()->name;

            foreach (Permission::all() as $p) {
                $resp[$p->name] = false;
            }

            foreach (Auth::user()->permissions->all() as $p) {
                $resp[$p->name] = true;
            }

            return response()->json($resp, Response::HTTP_OK);
        }

        return response()->json([
            'message' => 'Credenciales incorrectas',
        ], Response::HTTP_UNAUTHORIZED);
    }
}

/*
*
""
*/
