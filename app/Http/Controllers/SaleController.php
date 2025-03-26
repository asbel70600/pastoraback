<?php

namespace App\Http\Controllers;

use App\Currencies;
use App\Mediums;
use App\Models\BillOperation;
use App\Models\BillStock;
use App\Models\DollarStock;
use App\Models\Product;
use App\Models\ProductOperation;
use App\Models\ProductStock;
use App\Models\Subsidiary;
use App\Operations;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Nette\Utils\Strings;
use PhpParser\Node\Stmt\Foreach_;
use Ramsey\Uuid\Type\Integer;
use Validator;

class SaleController extends Controller
{

    public function store(Request $request): Response
    {
        $val = $request->validate(
            [
                'productos' => 'array',
                'costo' => 'required|numeric',
                'billetes' => 'required|array',
                'ajuste' => 'required|bool',
                'descripcion' => 'string',
            ]
        );

        $val_prod = Validator::make(
            $request->all(), [
            'productos.*.cantidad' => 'required|integer',
            'productos.*.id' => 'required|exists:App\Models\Product,id',
            'productos.*.precio' => 'required|numeric',
            ]
        );


        foreach($val["productos"] as $prod){
            $op = new ProductOperation();
            $op->product_id = $prod["id"];
            $op->user_id = Auth::user()->id;
            $op->subsidiary_id = Auth::user()->subsidiary_id;
            $op->amount = $prod["cantidad"];
            $op->adjustment = $val["ajuste"];
            $op->description = $val["descripcion"] ?? "";
            $op->type = Operations::out;
            $op->save();

            $stock = ProductStock::whereProductId($prod["id"])->whereSubsidiaryId($op->subsidiary_id)->first()??
                new ProductStock();

            $stock->subsidiary_id = $op->subsidiary_id;
            $stock->product_id = $prod["id"];
            $newquantity = $stock->quantity - $op->amount;
            $stock->quantity = ($newquantity) >= 0 ? $newquantity : 0;
            $stock->save();
        }

        foreach($val["billetes"] as $den => $quan){
            $op = new BillOperation();
            $op->subsidiary_id = Auth::user()->subsidiary_id;
            $op->user_id = Auth::user()->id;
            $op->amount = $quan;
            $op->operation = Operations::in;
            $op->adjustment = $val["ajuste"];
            $op->description = $val["descripcion"] ?? "";

            if($den == "transferencia") {
                $op->medium = Mediums::card;
                $op->currency = Currencies::cup;
            }elseif($den == "usd") {
                $op->medium = Mediums::cash;
                $op->currency = Currencies::usd;
            }else{
                $op->medium = Mediums::cash;
                $op->currency = Currencies::cup;
                $op->denomination = $den;
            }
            $op->save();

            $stock = BillStock::whereSubsidiaryId(Auth::user()->subsidiary_id)->where('denomination', $op->denomination)->where('medium', $op->medium)->where('currency', $op->currency)->first() ??
                new BillStock();
            $stock->subsidiary_id = Auth::user()->subsidiary_id;
            $stock->denomination = $op->denomination;
            $stock->quantity += $op->amount;
            $stock->medium = $op->medium;
            $stock->currency = $op->currency;
            $stock->save();

        }

        return response([], 200);

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
