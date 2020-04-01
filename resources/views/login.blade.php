<?php
//require("common.php");
if (isset($_SESSION['email_id'])) {
    header('location: index.php');
}


?>
<!DOCTYPE html>
<html>
<head>
  @extends('head5')      
<title>login page </title>
</head>
<body>
    <br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="row">
    <div class="col-sm-12 col-lg-12">   
<div class="loginbox">
<br/>
<br/>
<img src="img/log.png" class="log">
<h1>LOGIN here</h1>
<form action="/login_submit" method="POST">@csrf
<label>E-mail :</label>
<input type="text" name="email_id">
@error('email_id')
<div class="e1">{{$message}}</div>
@enderror
<label>Password :</label>
<input type="password" name="pass1">
@error('pass1')
<div class="e1">{{$message}}</div>
@enderror
<button  type="submit" name="submit">Login</button>
<br><br>
<div class="a8">{{$error ?? ''}}</div>
</form>
<a class="a8" href="/signup">create a new account</a><br>
<a class="a8" href="/index">Home page</a>
</div>
</div>
</div>
    
   <div class="navbar-fixed-bottom">
        
         @include('footer')
        
    </div>
</body>
</html>
