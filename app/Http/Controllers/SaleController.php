<?php

namespace App\Http\Controllers;

use App\Models\Subsidiary;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SaleController extends Controller
{

    public function store(Request $request): Response
    {
        $val = $request->validate(
            [
            'products' => 'required|array',
            'total' => 'required|number',
            'direccion' => 'required|string',
            ]
        );


        $p = new Subsidiary;
        $p->name = $val["nombre"];
        $p->schedule = $val["horario"];
        $p->location = $val["direccion"];

        if(isset($val["image"])) {
            $path = $val["image"]->storePublicly("images");
            $path = str_replace("images", "storage", $path);
            $p->picture = 'localhost:8000/' . $path;
        }


        if ($p->save()) {
            return response($p, 200);
        } else {
            return response($p, 405);
        }
    }

    public function destroy(Request $request): Response
    {
        $val = $request->validate(
            [
            "id" => "required | exists:App\Models\Subsidiary,id",
            ]
        );

        $sub = Subsidiary::find($val["id"]);
        $sub->delete();

        return response(
            [
            $sub->toArray()
            ]
        );
    }
}
