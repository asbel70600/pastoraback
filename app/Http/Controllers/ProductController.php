<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        if(Auth::user()->cannot('viewAny',Product::class)){
            abort(403);
        }

        $products = Product::all()->where("hidden",false);
        $products = $products->toArray();
        return $products;
    }

    public function create(Request $request)
    {
        if(Auth::user()->cannot('create',Product::class)){
            abort(403);
        }

        $val = $request->validate([
            'name' => 'required|string|max:255',
            'sale_price' => 'numeric|required',
            'weight' => 'numeric|required',
            'image' => 'image',
        ]);


        $path = $val["image"]->storePublicly("images");
        $path = str_replace("images","storage",$path);

        $p = new Product;
        $p->name = $val["name"];
        $p->buy_price = 0;
        $p->sale_price = $val["sale_price"];
        $p->picture = 'localhost:8000/' . $path;
        $p->weight = $val["weight"];

        if ($p->save()) {
            return response($p, 200);
        } else {
            return response($p, 405);
        }
    }


    public function delete(Request $request): Response
    {
        $val = $request->validate([
            'id' => "integer|required|exists:App\Models\Product,id",
        ]);

        $prod = Product::whereId($val['id'])->firstOrFail();

        if ($request->user()->cannot('delete', $prod)) {
            abort(403, "You don't have authorization to delete this product");
        } else {
            $prod->update([
                "hidden" => true,
            ]);
        }

        return response([], 200);
    }


    public function update(Request $request)
    {
        $val = $request->validate([
            'id' => 'int|required|exists:App\Models\Product,id',
            'name' => 'string|max:255',
            'sale_price' => 'numeric',
            'weight' => 'numeric',
            'image' => 'image',
        ]);

        if(Auth::user()->cannot('delete',Product::whereId($request["id"])->firstOrFail())){
            abort(403);
        }

        $path = $val["image"]->storePublicly("images");
        $path = str_replace("images","storage",$path);
        $val["picture"] = 'localhost:8000/' . $path;



        $p = Product::whereId($val["id"])->firstOrFail();

        $val = array_filter($val,function (string $instance){
            return $instance!="id";
        },ARRAY_FILTER_USE_KEY);

        $p->update($val);
        $p->save();
        return response($p->toJson(), 200);
    }
}
