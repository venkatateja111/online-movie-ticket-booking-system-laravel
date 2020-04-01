<style>

              .dropdown:hover .dropdown-menu {
  display: block;
}
</style>
<div>
<div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button> 
           <ul class="nav navbar-nav navbar-left">
            <li> <a class="navbar-brand" href="/index">MovieTicks.com</a> </li>
            <li class="dropdown"> <a href="#" class=" dropdown-toggle" data-toggle="dropdown" >Languages</a> 
                         <ul class="dropdown-menu">
                    <li><a href = "/index2">All </a></li> 
                    <li><a href = "/telugu">Telugu </a></li> 
                    <li><a href = "/hindi"> Hindi</a></li>
                    <li><a href = "/english">English</a></li>
                         </ul>
                    </li>  
           </ul>
        </div> 
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
               
                    @if (Session::has('sess_email') && Session::has('sess_name') )  
                    <li class="dropdown">
                        <a href="#" class=" dropdown-toggle" data-toggle="dropdown" ><span class = "glyphicon glyphicon-user"> <b>{{ "hello   ".Session::get('sess_name')  }}</b></span></a> 
                   
                         <ul class="dropdown-menu">
                    <li><a href = "/setting"><span class = "glyphicon glyphicon-user"></span> Settings</a></li> 
                    <li><a href = "/logout"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                         </ul>
                    </li>
                    
                    </div>                    
@else  
  <li><a href="/signup"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
  <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  
        @endif
            </ul> 
        </div> 
    </div> 
</div>