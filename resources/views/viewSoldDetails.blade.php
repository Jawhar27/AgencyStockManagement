@extends('layouts.layout')

@section('concept')
<h3 class="text-primary text-center">{{$area}}</h3>

<div class="container">
<table class="table border">
  <thead>
    <tr>
      <th>Date</th>
      <th>Invoice_No</th>
      <th>Sales_value</th>
      <th>Discount</th>
      <th>Net_value</th>
      <th>Type_of_Payment</th>
      <th>Amount</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($details as $detail)
    <tr>
    
      <td>{{$detail->Date}}</td>
      <td>{{$detail->Invoice_No}}</td>
      <td>{{$detail->Sales_value}}</td>
      <td>{{$detail->Discount}}</td>
      <td>{{$detail->Net_value}}</td>
      <td>{{$detail->Type_of_Payment}}</td>
      <td>{{$detail->Amount}}</td>
    </tr>
    @endforeach
  
  </tbody>
</table>

<div class="row mt-5">
<div class="col-md-3"><h5 class="text-success text-center">Total Net_Value </h5>
<h6 class="text-primary text-center"> {{$sumOfNetValue}}</h6>

</div>
<div class="col-md-3"><h5 class="text-success text-center">Total Sales_Value </h5>
<h6 class="text-primary text-center"> {{$sumOfSalesValue}}</h6>
</div>

<div class="col-md-3"><h5 class="text-success text-center">Total Discount </h5>
<h6 class="text-primary text-center"> {{$sumOfDiscount}}</h6>
</div>
<div class="col-md-3">
<h5 class="text-success text-center">Total Amount</h5>
<h6 class="text-primary text-center">Cash:{{   $sumOfAmountCash}}</h4>
<h6 class="text-primary text-center">Cheque:{{ $sumOfAmountCheque}}</h4>
<h6 class="text-primary text-center">Credit:{{ $sumOfAmountCredit}}</h4>


</div>
</div>















</div>


@endsection