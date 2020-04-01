-<?php   
$name = Session::get('sess_name');
$pid  = Session::get('mid');
$price = Session::get('price');
$total = Session::get('total');
$uid = Session::get('sess_id');
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>payment page</title>
    @extends('head8');
    
</head>

<body>
    @include('header');     
    <div class="container-fluid">
        <div class="card-form">
            <div class="heading">
                
                <h1 style="color: black;">Confirm Tickets for Rs.{{ $total }}</h1>
   
            </div>
            <div class="payment">
                <form action="pay_vali" method="POST">@csrf
                    <div class="form-group owner">
                        <label for="owner">Name Of the Card Holder</label>
                        <input type="text" class="form-control" id="owner" value='{{$name}}'>
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" maxlength="3" name="cvv" value="{{ $cverr ?? '' }}" minlength="3">
                        <div class="a8">{{$error1 ?? ''}}</div>
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" id="cardNumber" name="cardNumber" value="{{ $cnerr ?? '' }}">
                        <div class="a8">{{$error ?? ''}}</div>
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>
                            <option value="16"> 2020</option>
                            <option value="17"> 2021</option>
                            <option value="18"> 2022</option>
                            <option value="19"> 2023</option>
                            <option value="20"> 2024</option>
                            <option value="21"> 2025</option>
                            <option value="21"> 2026</option>
                            <option value="21"> 2027</option>

                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="img/visa.jpg" id="visa">
                        <img src="img/mastercard.jpg" id="mastercard">
                        <img src="img/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        
                        <button type="submit" class="btn btn-default" id="confirm-purchase" name="confirm">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="navbar navbar-fixed-bottom">
         @include('footer'); 
    </div>
         
    
</body>

</html>
