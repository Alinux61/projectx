<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StockRequest;
use App\User;
use App\Stock;
use Auth;

class StockController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function stockPost(StockRequest $request)
    {
      $stock = Stock::create([

        'user_id' => Auth::user()->id,
        'product_name' => $request->product_name,
        'quantity_in_stock' => $request->quantity_in_stock,
        'price_per_item' => $request->price_per_item

      ]);

      $stock->save();
      return redirect()->back()->with('status', 'Success');
    }
}
