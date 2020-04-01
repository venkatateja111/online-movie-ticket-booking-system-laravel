
<!DOCTYPE html>
<html lang="en">
    <head>
       
        <title>Signup</title>
       @extends('head4')      
    </head>
    <body>
          
        <div>
        	@include('header')
        		
        	</div>
        
        <br><br><br>
       
        <div class="col-md-offset-1">
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        
                            <h2> SIGN UP</h2>
    
                       
                            <form action="signup_vali" method="POST">@csrf
                            <div class="form-group">
                                <label>First Name :</label>
                                <input class="form-control" placeholder="first_name" name="first_name" value="{{ old('first_name') }}">
                                @error('first_name')
                                <div class="e1">{{$message}}</div>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label>Last Name :</label>
                                <input class="form-control" placeholder="last_name" name="last_name" value="{{ old('last_name') }}">
                                @error('last_name')
                                <div class="e1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email Id :</label>
                                <input  class="form-control"  placeholder="email_id"   name="email_id" value="{{ old('email_id') }}">
                                <div>{{$error ?? ''}}</div>
                                @error('email_id')
                                <div class="e1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password :</label>
                                <input type="password" class="form-control" placeholder="Password"  name="password1" value="{{ old('password1') }}">
                                @error('password1')
                                <div class="e1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Confirm Password :</label>
                                <input type="password" class="form-control" placeholder="confirm Password"  name="password2" value="{{ old('password2') }}" >
                                @error('password2')
                                <div class="e1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone :</label>
                                <input type="number" class="form-control"  placeholder="phone"   name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                <div class="e1">{{$message}}</div>
                                @enderror
                            </div>
                                <button  type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br><br><br><br>
        <div>
            @include('footer')
        
        </div>
    </body>
</html>


