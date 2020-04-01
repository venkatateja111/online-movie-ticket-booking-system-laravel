
<!DOCTYPE html>
<html lang="en">
     <head>
        
        @extends('head3')
        <title>Hindi Movies</title>
    </head>

    <body>
        @include('header')
        <br><br><br>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div>
                <h1 style="color: white;">Category:  Hindi  </h1>
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/11.jpg" alt="">
                        <div class="caption">
                            <h3>Simmba </h3>
                            @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=11" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                               
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/12.jpg" alt="">
                        <div class="caption">
                            <h3>Uri </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=12" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/13.jpg" alt="">
                        <div class="caption">
                            <h3>Super30 </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=13" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>
            </div>
            
            
            <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/14.jpg" alt="">
                        <div class="caption">
                            <h3>Bharat </h3>
                               @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=14" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/15.jpg" alt="">
                        <div class="caption">
                            <h3>Kalank </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=15" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/16.jpg" alt="">
                        <div class="caption">
                            <h3> Gully Boy </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=16" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>
            </div>
            
            
             <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/17.jpg" alt="">
                        <div class="caption">
                            <h3>Badla </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=17" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Luka Chuppi </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=18" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Total Dhamaaka </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=19" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>
            </div>
            
            
            
              
    </div>
            

       <br><br>
        @extends('footer')
    
    </body>

</html>
