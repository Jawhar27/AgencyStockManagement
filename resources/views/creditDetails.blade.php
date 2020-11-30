@extends('layouts.layout')

@section('concept')

<div class="container">
<h3 class="text-primary text-center">  CREDIT DETAILS</h3>

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






















                                                </div>
@endsection