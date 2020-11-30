@extends('layouts.layout')
@section('concept')
<h3 class="text-primary text-center"> STOCK DETAILS IN STORE</h3>

<div class="container">
<table class="table border">
  <thead>
    <tr>
      <th>Stock_name</th>
      <th>Stock_quantity</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($details as $detail)
    <tr>
    
      <td>{{$detail->stock_name}}</td>
      <td>{{$detail->stock_quantity}}</td>
    </tr>
    @endforeach
  
  </tbody>
</table>






</div>
@endsection