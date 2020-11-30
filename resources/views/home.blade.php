@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->
        </div>
    </div>

    <div class="container mt-5  ">
                <div class="text-center">
                <img src="img/th.jpg" class="h-30 w-30" alt="...">
                   <h1 class="mt-3 text-danger ">CHERISH BISCUITS (PVT)LTD</h1>
                </div>
                                <div class="row mt-5 ml-2">
                                <div class="col-md-2"></div>
                               
                            
                                        <div class="col-md-4">
                                        <div class="card bg-primary" style="width: 18rem;">
                                                            
                                                                <div class="card-body">
                                                                <a href="/stockDetails"class="btn btn-primary text-white text-center"><h5 class="card-title ">Available Stock</h5></a>
                                                                    </div>
                                                                </div>
                                                                </div>
                               
                               
                               
                             
                                                   <div class="col-md-4">
                               

                                                    <div class="card bg-primary" style="width: 18rem;">
                                                
                                                    <div class="card-body">
                                                    <a href="/soldDetails" class="btn btn-primary text-white text-center"><h5 class="card-title ">Sold Details</h5></a>
                                                        </div>
                                                    </div>
                                                    </div>
                               
                               
                               
                               
                                </div>


                                <div class="row mt-5 ml-2">
                                <div class="col-md-2"></div>
                            
                                        <div class="col-md-4 ">
                                        <div class="card bg-primary" style="width: 18rem;">
                                                            
                                                                <div class="card-body">
                                                                                                   <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalCenter">
                                                                    <h5 class="card-title ">   Credit Details</h5>
                                                                            </button>




                                                                     

                                            


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Choose area and Date for Credit Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/showCreditDetails" method="POST">
                                                @csrf
                                                
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

                                                <input type="submit" class="btn btn-primary " value="View Credit Details">
                                                </form>
      </div>
     
    </div>
  </div>
</div>
                                                                   


















                                                                    
                                                                
                                                                    
                                                                    </div>
                                                                </div>
                                                                </div>
                               
                               
                               
                             
                                                   <div class="col-md-4">
                               

                                                    <div class="card bg-primary" style="width: 18rem;">
                                                
                                                    <div class="card-body">
                                                    <a href="#" class="btn btn-primary text-white text-center"><h5 class="card-title ">Bank Deposit Details</h5></a>
                                                      
                                                        </div>
                                                    </div>
                                                    </div>
                               
                               
                               
                               
                                </div>


</div>
@endsection
