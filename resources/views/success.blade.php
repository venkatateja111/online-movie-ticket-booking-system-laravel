
<html>
    <head>
        <title>Success</title>
        @extends('head7')
         @extends('head10')
        <style type="text/css">
        .a1{
            width: 60%;
            height: 420px;
            border: 1px solid black;
            margin: 100px;
            margin-left: 20%;
            background-color: rgba(0,0,0,0.4);
            display: none;
        }
        .a1 img{
            float: left;
            width: auto;
            height: 415px;
            background-size: cover;
        }
        .a1 .a3{
            background-color: yellow ;
            background:url(img/backw.jpg);
            
            width: auto;
            height: 415px;
            color: black;
            font-size: 25px; 
        }
        .a1 .a4{
      margin-left: 10px;
      padding-left: 30px;
            color: red;
            font-size: 25px;
            font-family: Comic Sans;
        }
        #btnSave{
            margin-left: 35%;
        }
    </style>
    </head>
    <body>
        <div class="container">
        <div id="b1"> @include('header')</div>
        <br><br><br>
        <div class="jumbotron">
            <h1 align="center">Booking completed Successfully</h1>
            <a href="#" role="button" class="btn btn-primary" id="btnSave">Download ticket</a>
            
            
            <center><img class="img-responsive" src="img/success3.png" height="40px;" width="auto"></center>
        </div>
        </div>



        <div class="a1" id="a1">
    <div class="a2">
    <img src="img/{{ $mid }}.jpg">
    </div>
    <div class="a3">
        ------------MovieTicks.com------------<br>
        <span class="a4">Name of The person</span> : {{$name}}<br><br>
        <span class="a4">Name of the Movie</span>  : {{$pname}} <br><br>                                
        <span class="a4">No. of tickets</span>     : {{$no}} <br><br>                                        
        <span class="a4">Total price </span>       : {{$total}} <br> <br>                                   
        <span class="a4">Date of show</span>      : {{$date}}        
    </div>
</div>
       <div class="navbar-fixed-bottom">
            @include("footer")
        
        </div> 
    </body>
</html>

   