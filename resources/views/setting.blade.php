
<!DOCTYPE html>
<html>
    <head>
        
        <title>Settings</title>
     @extends('head11');
      
    </head>
    <body>
        <br><br><br><br>
        @include('header')
        <br><br>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <h4> change name</h4>
                    <form action="/sscript" method="POST">@csrf
                    <div class="form-group">
                                <input type="text" class="form-control"  placeholder="enter first name"   name="first_name" required = "true" value="{{Session::get('sess_name')}}">
                            </div>
                        <div class="form-group">
                                <input type="text" class="form-control"  placeholder="enter last name"   name="last_name" required = "true" value="{{Session::get('sess_name2')}}">
                            </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <p style="color: red">{{ $error1 ?? ''}} </p>
                    </form>
                    <br><br><br>
                    <h4>Change Password</h4>
                    <form action="/sscript2" method="POST">@csrf
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password2" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password3"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <p style="color: red">{{ $error2 ?? ''}} </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="navbar-fixed-bottom">
        @include('footer')
        </div>
    </body>
</html>