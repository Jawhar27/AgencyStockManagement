@extends('layouts.layout')

@section('concept')
<div class="container">
<div class=" row mt-5">
<div class="col-md-4"></div>
     <div class="col-md-4">
     <p class=" msg text-light text-center  bg-success rounded ">{{ session('msg')}} </p>
                    <h3 class="text-primary"> ADDING STOCK TO STORE</h3>
                        <div class="card ml-3" style="width: 18rem;">
                        
                        <div class="card-body">
                          <!-- form stock1 -->
                                                <form action="/addStock" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <h6>Adding Stocks</h6>
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label for="stock_name">Select the Product Name</label>
                                                    <select class="form-control" id="stock_name" name="stock_name">
                                                    <option>Orange Cream (330g)</option>
                                                    <option>Choco Peeps 50g</option>
                                                    <option>Lemon Cream(330g)</option>
                                                    <option>Vanilaa Peeps(50g)</option>
                                                    <option>B/W Cream Biscuits(330g)</option>

                                                    <option>Shorties(350g)</option>
                                                    <option>Chocolate Biscuits(200g)</option>
                                                    <option>Chocolate Cream(100g)</option>
                                                    <option>Marie(80g)</option>
                                                    <option>Chocolate Cream(400g)</option>

                                                    <option>Nice(500g)</option>
                                                    <option>Shorties (450g)</option>
                                                    <option>Shorties(280g)</option>
                                                    <option>Vannila Peeps(240g)</option>
                                                    <option>Choco Peeps(240g)</option>

                                                    <option>Marie(320g)</option>
                                                    <option>Duplex Custard Sandwich(400g)</option>
                                                   
                                                    <option>Wafers Classic Vanilla(90g)</option>
                                                   
                                                    <option>Wafers Milk(90g)</option>

                                                    <option>Wafers Vanilla Cream(225g)</option>
                                                    <option>Wafers Choclate Cream(225g)</option>
                                                    <option>Wafers Lemon(225g)</option>
                                                    <option>Wafers Pink(225g)</option>
                                                    <option>Wafers vanilla(375g)</option>

                                                    <option>Wafers Chocolate Cream(375g)</option>
                                                    <option>Milk Wafers(375g)</option>
                                                    <option>Wafers Pink(375g)</option>
                                                    <option>Wafers Pink(35g)</option>
                                                    <option>Break Crunchy Choco(6g)</option>
                                                    <option>Cracker(500g)<option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="stock_quantity">Stock_Quantity</label>
                                                    <input type="text" class="form-control" id="stock_quantity" name="stock">
                                                
                                                </div>
                        
                                                <input type="submit" class="btn btn-primary btn-block" value="Add To Stock">
                                                </form>
          
                          </div>
                       </div>
                       <a href="/storeStockDetails" class="mt-4 btn btn-success btn-block">View Store Stock Details</a>

                       </div>
                      
                      
                       



</div>

</div>

      
       

     









@endsection