<?php

namespace App\Http\Controllers;

use App\Currencies;
use App\Mediums;
use App\Models\BillOperation;
use App\Models\DollarStock;
use App\Models\ProductOperation;
use App\Models\ProductStock;
use App\Models\Subsidiary;
use App\Operations;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Nette\Utils\Strings;
use PhpParser\Node\Stmt\Foreach_;
use Ramsey\Uuid\Type\Integer;

class SaleController extends Controller
{

    public function store(Request $request): Response
    {
        $val = $request->validate(
            [
            'productos' => 'array',
            'productos.*.cantidad' => 'required|integer',
            'productos.*.id' => 'required|exists:App\Models\Product,id',
            'productos.*.precio' => 'required|numeric',
            'costo' => 'required|number',
            'denominaciones' => 'required|array',
            'ajuste' => 'required|bool'
            ]
        );

        foreach($val["productos"] as $prod){
            $op = new ProductOperation();
            $op->product_id = $prod["id"];
            $op->user_id = Auth::user()->id;
            $op->subsidiary_id = Auth::user()->subsidiary_id;
            $op->amount = $prod["cantidad"];
            $op->adjustment = $val["ajuste"];
            $op->description = $val["descripcion"];
            $op->type = Operations::out;
            $op->save();

            $stock = ProductStock::whereProductId($prod["id"])->whereSubsidiaryId($op->subsidiary_id)->firstOrCreate();
            $newquantity = $stock->quantity - $op->amount;
            $stock->quantity = ($newquantity) >= 0 ? $newquantity : 0;
            $stock->save();
        }

        foreach($val["denominaciones"] as $den){
            $op = new BillOperation();
            $op->subsidiary_id = Auth::user()->subsidiary_id;
            $op->user_id = Auth::user()->id;
            $op->amount = $den["cantidad"];
            $op->operation = Operations::in;
            $op->adjustment = $val["ajuste"];
            $op->description = $val["descripcion"];

            if(array_key_first($den) == "transferencia") {
                $op->medium = Mediums::card;
                $op->currency = Currencies::cup;
            }elseif(array_key_first($den) == "usd") {
                $op->medium = Mediums::cash;
                $op->currency = Currencies::usd;
            }else{
                $op->denomination = intval(array_key_first($den));
            }
            $op->save();

            $stock = DollarStock::whereSubsidiaryId(Auth::user()->subsidiary_id)->where('denomination', $op->denomination)->where('medium', $op->medium)->where('currency', $op->currency)->firstOrCreate();
            $stock->quantity += $op->amount;
            $stock->save();

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
