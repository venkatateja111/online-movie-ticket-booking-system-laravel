
<!DOCTYPE html>
<html lang="en">
    <head>
        
        @extends('head3')
        <title>Telugu Movies</title>
    </head>

    <body>
        @include('header')
        <br><br><br>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div>
                <h1 style="color: white;">Category:  Telugu  </h1>
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 ">
                    
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>That is MahaLaxmi </h3>
                            @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=2" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                                
                        </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Majili </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=3" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 ">
                    
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Suryakantham </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=4" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>
            </div>
            
            
            <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Geetha govindham </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=5" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/6.jpg" alt="">
                        <div class="caption">
                            <h3>Tholiprema </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=6" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/7.jpg" alt="">
                        <div class="caption">
                            <h3> GangLeader </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=7" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>
            </div>
            
            
             <br><br>
            <div class="row text-center" id="cameras">
                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/8.jpg" alt="">
                        <div class="caption">
                            <h3>Syeraa </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=8" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/9.jpg" alt="">
                        <div class="caption">
                            <h3>Chanakya </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=9" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>

                <div class="col-md-4 col-sm-6 home-feature">
                    
                        <img src="img/10.jpg" alt="">
                        <div class="caption">
                            <h3>Saaho </h3>
                                @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1">Book Now</a></p> 
                             @else
                                    <a href="/book?id=10" name="add" value="add" class="btn btn-primary bt1">Book Now</a>
                            @endif
                        </div>
                    
                </div>
            </div>
            
            
            
              
    </div>
            

       <br><br>
        @include('footer')
    
    </body>

</html>
