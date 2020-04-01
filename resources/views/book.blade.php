<?php
$mid = Session::get('mid');
$pname = DB::table('mproducts')->select('name')->where('id',$mid)->value('name');
session(['pname' => $pname]);
?>
      

<html>
    <head>
        <title>Booking tickets</title>
        @extends('head6');   
       
    </head>
    <body>
            
         @include('header');  
         
    <br><br><br>
    <div id="container">
        <div class="row">
        <div id="p1" class="col-sm-6">
            <img src="img/{{ $mid }}.jpg">
        </div>
        <div id="p2" col-sm-6 >
       <form action="book_vali" method="POST">@csrf
                <br><br>
                <h1>Booking Details:</h1>
                <div class="form-group">
                   <label>Movie Name :</label>
                   {{ $pname}}
                </div>
                <div class="form-group">
                    <label>Ticket Fare&nbsp&nbsp&nbsp:&nbsp</label>Rs. 250/-
                    
                </div>  

                <div class="form-group" ng-app="" ng-init="n1='1'">
                    <label>No' of Tickets&nbsp:</label>
                    <input type="number" ng-model="n1" id='p4' value="1" name="price"><br>
                    <span class="e1" style="color: white;">{{$priceerr ?? ''}}</span>
                    <br><label id="p3">Internet Charges:&nbsp</label>Rs.&nbsp @{{10*n1}}
                    <br><label>Total Charges:&nbsp</label>Rs.&nbsp @{{(250*n1)+(10*n1)}}
                </div>

                 <div class="form-group">
                    <label>Select date & time</label>
                    <input type="date" name="date" id="p4">
                     @error('date')
                     <div class="e1">{{$message}}</div>
                     @enderror
                </div>


            
                <button  class="btn btn-primary">Proceed to pay</button>
            </form>
            
        </div>
        </div>
    </div>
    </body>
</html>

