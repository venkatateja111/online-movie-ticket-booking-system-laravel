
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <head>
        
        @extends('head3')
        <title>English Movies</title>
    </head>

    <body>
        @include('header')
        <br><br><br>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div>
                <h1 style="color: white;">Category:  English </h1>
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>Spider Man(Far From Home) </h3>
                                 @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=20" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3>Hobbs & Shaw </h3>
                               @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=21" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>Joker </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=22" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>
            </div>
            
            
            <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Gemini man </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=23" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>Johnwick3 </h3>
                               @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=24" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3> Shazam </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=25" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>
            </div>
            
            
             <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/26.jpg" alt="">
                        <div class="caption">
                            <h3>Maleficent2 </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=26" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/27.jpg" alt="">
                        <div class="caption">
                            <h3>Alladdin </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=27" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/28.jpg" alt="">
                        <div class="caption">
                            <h3>IT </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=28" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>
            </div>
            
            
            
              
    </div>
            

       <br><br>
        @include('footer')
    
    </body>

</html>
