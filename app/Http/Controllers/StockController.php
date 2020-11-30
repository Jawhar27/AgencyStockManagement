<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function index(){
        return view('stockDetails');
    }
    public function addStock(Request $request){
       
          $stk=new Stock();
          $stk->stock_name=$request->stock_name;
          $stk->stock_quantity=$request->stock;
          

          $stk->save();
          return redirect('/stockDetails')->with('msg','Added to store');
    }
    public function storeStockDetails(){
        $details=Stock::all();
        return view('storeStockDetails',compact('details'));
    }
}
