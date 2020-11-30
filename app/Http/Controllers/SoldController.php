<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datetime;
use Carbon\Carbon;
use App\Models\Sold;



class SoldController extends Controller
{
    public function index(){
        $mytime =Carbon::now('Asia/Colombo');
        $mytime= date('Y-m-d');
      
        return view('soldDetails',compact('mytime'));
    }
    public function addSoldDetails(Request $request){
        $mytime =Carbon::now('Asia/Colombo');
        $mytime= date('Y-m-d');
        $sold=new Sold();
        $sold->Date=$mytime;
        $sold->Area=$request->Area;
        $sold->Invoice_No=$request->Invoice_No;
        $sold->Sales_value=$request->Sales_value;
        $sold->Discount=$request->Discount;
        $sold->Net_value=$request->Net_value;
        $sold->Type_of_Payment=$request->Type_of_Payment;
        $sold->Amount=$request->Amount;

        $sold->save();
        return redirect('/soldDetails')->with('msg','Added to database');
       

        
    } 
    public function viewSoldDetails(Request $request){
        $area=$request->Area;
        $date=$request->date;
        $details=Sold::where('Area',$area)->where('Date',$date)->get();
        $sumOfAmountCash=Sold::where('Area',$area)->where('Date',$date)->where('Type_of_Payment','cash')->sum('Amount');
        $sumOfAmountCheque=Sold::where('Area',$area)->where('Date',$date)->where('Type_of_Payment','cheque')->sum('Amount');
        $sumOfAmountCredit=Sold::where('Area',$area)->where('Date',$date)->where('Type_of_Payment','credit')->sum('Amount');
        $sumOfSalesValue=Sold::where('Area',$area)->where('Date',$date)->sum('Sales_value');
        $sumOfNetValue=Sold::where('Area',$area)->where('Date',$date)->sum('Net_value');
        $sumOfDiscount=Sold::where('Area',$area)->where('Date',$date)->sum('Discount');
      
        
     return view('viewSoldDetails',compact('details','area','sumOfAmountCash','sumOfNetValue','sumOfSalesValue','sumOfAmountCheque','sumOfAmountCredit','sumOfDiscount'));
    }
    public function showCreditDetails(Request $request){
        $area=$request->Area;
        $date=$request->date;
     $details=Sold::where('Area',$area)->where('Date',$date)->where('Type_of_Payment','credit')->get();

        return view('creditDetails',compact('details'));
    }
}
