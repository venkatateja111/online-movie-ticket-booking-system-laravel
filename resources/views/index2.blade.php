

<!DOCTYPE html>
<html>
<head>
    <title>Movieticks</title>
    @extends('head2')
       

</head>
<body>
        @include('header')
    <br><br><br> <br><br><br>
        <div class="container">
            <button onclick="window.location.href = '/telugu';"style="margin-left: 100px;"><h1>TollyWood</h1></button>
             <br><br><br>
        </div>
        
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div id="imageCarousel" class="carousel slide" data-interval="2000"
                     data-ride="carousel" data-pause="hover" data-wrap="true" style="height: 570px;">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel" data-slide-to="1"></li>
                        <li data-target="#imageCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/2.jpg" class="img-responsive" style="height: 420px;">
                                    
                                        <h3 align="center">That is Mahalaxmi (2019)</h3>
                            @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=2" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif    
                                </div>


                                <div class="col-xs-4">
                                    <img src="img/3.jpg" class="img-responsive" style="height: 420px;">
                                   <h3 align="center">Majili (2019)</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=3" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>


                                <div class="col-xs-4">
                                    <img src="img/4.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Suryakantham (2019)</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=4" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/5.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Geetha Govindham (2019)</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=5" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/6.jpg" class="img-responsive" style="height: 420px;">
                                    
                                        <h3 align="center">TholiPrema (2019)</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=6" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                    
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/7.jpg" class="img-responsive" style="height: 420px;">
                                    
                                        <h3 align="center">GangLeader (2019)</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=7" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/8.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Syeraa (2019)</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=8" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/9.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Chaanikya(2019)</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=9" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/10.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Saaho (2019)</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=10" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#imageCarousel" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#imageCarousel" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
        
        <br><br><br> 
        <div class="container">
            <button onclick="window.location.href = '/hindi';"style="margin-left: 100px;"><h1>BollyWood</h1></button>
             <br><br><br>
        </div>
        
        
         <div class="row">
            <div class="col-xs-12">
                <div id="imageCarousel2" class="carousel slide" data-interval="2000"
                     data-ride="carousel" data-pause="hover" data-wrap="true" style="height: 570px;">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel2" data-slide-to="1"></li>
                        <li data-target="#imageCarousel2" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/11.jpg" class="img-responsive" style="height: 420px;">
                                    
                                        <h3 align="center">Simmba (2019)</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=11" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                        
                                    
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/12.jpg" class="img-responsive" style="height: 420px;">
                                   <h3 align="center">Uri (2019)</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=12" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/13.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Super30 (2019)</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=13" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/14.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Bharat (2019)</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=14" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/15.jpg" class="img-responsive" style="height: 420px;">
                                    
                                        <h3 align="center">Kalank (2019)</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=15" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                    
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/16.jpg" class="img-responsive" style="height: 420px;">
                                    
                                        <h3 align="center">Gully Boy (2019)</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=16" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/17.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Badla (2019)</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=17" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/18.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Luka Chuppi(2019)</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=18" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/19.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Total Dhamaal (2019)</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=19" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#imageCarousel2" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#imageCarousel2" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
        
        
        
        <br><br><br> 
        <div class="container">
            <button onclick="window.location.href = 'English.php';"style="margin-left: 100px;"><h1>HollyWood</h1></button>
             <br><br><br>
        </div>
        
        
         <div class="row">
            <div class="col-xs-12">
                <div id="imageCarousel3" class="carousel slide" data-interval="2000"
                     data-ride="carousel" data-pause="hover" data-wrap="true" style="height: 570px;">

                    <ol class="carousel-indicators">
                        <li data-target="#imageCarousel3" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel3" data-slide-to="1"></li>
                        <li data-target="#imageCarousel3" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/20.jpg" class="img-responsive" style="height: 420px;">
                                    
                                        <h3 align="center">Spider Man(Far From Home)</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=20" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                        
                                    
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/21.jpg" class="img-responsive" style="height: 420px;">
                                   <h3 align="center">Hobbs & Shaw</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=21" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/22.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Joker</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=22" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/23.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Gemini man</h3>
                                       @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=23" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/24.jpg" class="img-responsive" style="height: 420px;">
                                    
                                        <h3 align="center">John wick 3</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=24" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                    
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/25.jpg" class="img-responsive" style="height: 420px;">
                                    
                                        <h3 align="center">Shazam</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=25" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                    
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                <div class="col-xs-4">
                                    <img src="img/26.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Maleficent 2</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=26" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/27.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">Aladdin</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=27" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                                <div class="col-xs-4">
                                    <img src="img/28.jpg" class="img-responsive" style="height: 420px;">
                                    <h3 align="center">IT</h3>
                                        @if (!Session::has('sess_email'))  
                                <p><a href="/login" role="button" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a></p> 
                             @else
                                    <a href="/book?id=28" name="add" value="add" class="btn btn-primary bt1" style="margin-left: 100px;">Book Now</a>
                            @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#imageCarousel3" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a href="#imageCarousel3" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
    

<br><br><br>  
         @include('footer')
    
</body>
</html>
