@extends('layouts.layout')
@section('concept')
<h3 class="text-primary text-center"> SOLD DETAILS</h3>
<h4 class=" text-center text-info">{{$mytime}}</h4>
<div class="container">
<div class=" row mt-5">
<div class="col-md-2"></div>
     <div class="col-md-6">
     <p class=" msg text-light text-center  bg-success rounded ">{{ session('msg')}} </p>
                   
                    <h5 class="text-primary"> ADDING SOLD DETAILS</h5>
                    
                        <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                          <!-- form stock1 -->
                                                <form action="/addSoldDetails" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <h6>Add Sold Details</h6>
                                                
                                                </div>


                                                <div class="form-group">
                                                    <label for="Area">Select the Area</label>
                                                    <select class="form-control" id="Area" name="Area">
                                                    <option>Norwood-Dickoya</option>
                                                    <option>Bogawanthalawa</option>
                                                    <option>Maskeliya</option>
                                                    <option>Hatton-fodyce</option>
                                                    <option>Upcot</option>
                                                    <option>Wattawala</option>

                                                    </select>
                                                </div>









                                             
                                                <div class="form-group">
                                                    <label for="Invoice_No">Invoice_No</label>
                                                    <input type="text" class="form-control" id="Invoice_No" name="Invoice_No">
                                                
                                                </div>

                                                <div class="form-group">
                                                    <label for="Sales_value">Sales_value</label>
                                                    <input type="text" class="form-control" id="Sales_value" name="Sales_value">
                                                
                                                </div>

                                                <div class="form-group">
                                                    <label for="Discount">Discount</label>
                                                    <input type="text" class="form-control" id="Discount" name="Discount">
                                                
                                                </div>

                                                <div class="form-group">
                                                    <label for="Net_value">Net_value</label>
                                                    <input type="text" class="form-control" id="Net_value" name="Net_value">
                                                
                                                </div>



                                                <div class="form-group">
                                                <label for="Type_of_Payment">Type_of_Payment</label><br>
                                                <label><input type="radio" name="Type_of_Payment" value="cash"> cash</label><br>
                                                <label><input type="radio" name="Type_of_Payment"value="cheque"> Cheque</label><br>
                                                <label><input type="radio" name="Type_of_Payment"value="credit"> Credit</label><br>
                                                </div>



                                                <div class="form-group">
                                                    <label for="Amount">Amount</label>
                                                    <input type="text" class="form-control" id="Amount" name="Amount">
                                                
                                                </div>







                        
                                                <input type="submit" class="btn btn-primary btn-block" value="Add To sold Details tables">
                                                </form>
          
                          </div>
                       </div>

                       </div>
                      
                       <div class="col-md-4">
                       
                       <h5 class="mt-4 text-primary"> VIEW SOLD DETAILS</h5>
                       <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                          <!-- form stock1 -->
                                                <form action="/viewSoldDetails" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <h6>View Sold Details</h6>
                                                
                                                </div>

                                                <div class="form-group ml-2">
                                                <label for="date">Select the Date to view records</label>
                                                  <input type="date" name="date">
                                                
                                                </div>


                                                <div class="form-group">
                                                    <label for="Area">Select the Area to view</label>
                                                    <select class="form-control" id="Area" name="Area">
                                                    <option>Norwood-Dickoya</option>
                                                    <option>Bogawanthalawa</option>
                                                    <option>Maskeliya</option>
                                                    <option>Hatton-fodyce</option>
                                                    <option>Upcot</option>
                                                    <option>Wattawala</option>

                                                    </select>
                                                </div>
                                                <input type="submit" class="btn btn-primary btn-block" value="View Details">
                                                </form>
                                                </div>

                       </div>
                       
                       </div>



</div>

</div>
@endsection