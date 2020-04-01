<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class validations extends Controller
{    
    //

    function valid(Request $req){  

             
    	$req->validate([
            
            'first_name'=>'required|regex:/^[A-Za-z\s]+$/',
            'last_name'=>'required|regex:/^[A-Za-z\s]+$/',
            'email_id'=>'required|email',
            'password1'=>'required|min:6',
            'password2'=>'same:password1',
            'phone'=>'required|lt:9999999999|gt:6000000000'
            ]);   

    $user = DB::table('musers')->where('email_id',$req->email_id)->count();
         if($user > 0){
              return view('signup',['error'=>'email already exists']);
         }
           
        else 
        {
    	       DB::table('musers')->insertorIgnore([
    		    'first_name'=>$req->first_name,
            'last_name'=>$req->last_name,
            'email_id'=>$req->email_id,
            'password'=>$req->password1,
            'phone'=>$req->phone
    	     ]);

          $sess_email = DB::table('musers')->select('email_id')->where('email_id',$req->email_id)->value('email_id');
          $sess_name = DB::table('musers')->select('first_name')->where('email_id',$req->email_id)->value('first_name');
          $sess_id = DB::table('musers')->select('id')->where('email_id',$req->email_id)->value('id');
          $req->session()->put('sess_email',$sess_email);
          $req->session()->put('sess_name',$sess_name);
          $req->session()->put('sess_name2',$req->last_name);
          $req->session()->put('sess_id',$sess_id);
         
             return redirect()->route('red1'); 
           }

    }



     public function login2(Request $req)
        {
          $req->validate([
            
            'email_id'=>'required|email',
            'pass1'=>'required',
            ]);



         $user = DB::table('musers')->select('*')->where([
            ['email_id','=',$req->email_id ],
            [ 'password','=',$req->pass1]
            ])->count();

          if($user==0){
            return view('login',['error'=>'please enter valid details']);
          }
   
          else{
          $sess_email = $req->input('email_id');
          $sess_name = DB::table('musers')->select('first_name')->where('email_id',$req->email_id)->value('first_name');
          $sess_name2 = DB::table('musers')->select('last_name')->where('email_id',$req->email_id)->value('last_name');
          $sess_id = DB::table('musers')->select('id')->where('email_id',$req->email_id)->value('id');
          $req->session()->put('sess_id',$sess_id);
          $req->session()->put('sess_email',$sess_email);
          $req->session()->put('sess_name',$sess_name);
          $req->session()->put('sess_name2',$sess_name2);
          return redirect()->route('red1');
          }
          
        }

        public function logout(Request $req){

            $req->session()->flush();
            return redirect()->route('red1');
        }


        public function pay1(Request $req){
           $todayDate = date('Y/m/d');
          $req->validate([
           
            'start_date' => 'date_format:m/d/Y|after_or_equal:'.$todayDate,
            'end_date' => 'date_format:Y/m/d|after:start_date',
            'date'=> 'required|date|after_or_equal:'.$todayDate,
            ]); 
          if($req->price <= 0){
              return view('book',['priceerr'=>'please enter minimum one ticket']);
          }
          else{
          $req->session()->put('date',$req->date);
          $req->session()->put('price',$req->price);
          $total = $req->price *250 + $req->price *10;
          $req->session()->put('total',$total);
          $uid = $req->session()->get('sess_id');
          $pid  = $req->session()->get('mid');
          $pname  = $req->session()->get('pname');
          $date = $req->date;
         
         $req->validate([
            'date'=>'required'
            ]);   

          
          if($total != 0)
          {

            $num = DB::table('muser_products')->select('*')->where([
            ['uid','=',$uid ],
            ['pid','=',$pid],
            ['no of tickets','=',$req->price],
            ['total','=',$total],
            ['date','=',$date],
            ['status','=','pending']
            ])->count();
             if($num == 0)
          {
             DB::table('muser_products')->insertorIgnore([
            'uid'=>$uid,
            'pid'=>$pid,
            'no of tickets'=>$req->price,
            'total'=>$total,
            'date'=>$date,
            'status'=>'pending']);


          }
        }



        
        return redirect()->route('red2');
      }
}  



function pay2(Request $req){
            
            $cvv = $req->cvv;
            $number = preg_replace('/\s+/', '', $req->cardNumber);
            if(!(preg_match("/^(?:4[0-9]{12}(?:[0-9]{3})?)$/",$number)) &&  !(preg_match("/^(?:5[1-5][0-9]{14})$/",$number)) && !(preg_match("/^(?:3[47][0-9]{13})$/",$number)) && empty($cvv) )
           {
             return view('pay',['error1'=>'please enter valid cvv number'],['error'=>'please enter valid card number']);
           }
          else if(empty($cvv)){
            return view('pay',['error1'=>'please enter valid cvv number'],['cnerr'=>$req->cardNumber]);
          }
          else if(!(preg_match("/^(?:4[0-9]{12}(?:[0-9]{3})?)$/",$number)) &&  !(preg_match("/^(?:5[1-5][0-9]{14})$/",$number)) && !(preg_match("/^(?:3[47][0-9]{13})$/",$number))){
            return view('pay',['error'=>'please enter valid card number'],['cverr'=>$req->cvv]);
          }
            else
           {
           
           $pid = $req->session()->get('mid');
           $price =   $req->session()->get('price');
           $total = $req->session()->get('total');
           $uid = $req->session()->get('sess_id');
           $date = $req->session()->get('date');
           $name = $req->session()->get('sess_name');
           $pname = $req->session()->get('pname');

             DB::table('muser_products')->where([
            ['uid','=',$uid ],
            ['pid','=',$pid],
            ['no of tickets','=',$price],
            ['total','=',$total],
            ['date','=',$date],
            ['status','=','pending']
            ])->update(['status'=>'confirmed']);

             
             
             return view('success',['mid'=>$pid,'name'=>$name,'pname'=>$pname,'no'=>$price,'total'=>$total,'date'=>$date]);

           }
   } 

    
   function sett(Request $req){

    $name1 = $req->first_name;
    $name2 = $req->last_name;
    $email = $req->session()->get('sess_email');

         DB::table('musers')->where([
            ['email_id','=',$email ]
            ])->update(['first_name'=>$name1,'last_name'=>$name2]);
      $req->session()->put('sess_name',$name1);
      $req->session()->put('sess_name2',$name2);
        return view('setting',['error1'=>'names updated successfully']);

   }

   function sett2(Request $req){
    $email = $req->session()->get('sess_email');
    $pass1 = $req->password1;
    $pass2 = $req->password2;
    $pass3 = $req->password3;
    $pass4 = DB::table('musers')->select('password')->where('email_id',$email)->value('password');

    if($pass1 == $pass4){
      if($pass2 == $pass3){
       DB::table('musers')->where([
            ['email_id','=',$email ]
            ])->update(['password'=>$pass2]);
       return view('setting',['error2'=>'password updated succesfully']);}
       else
        return view('setting',['error2'=>'new passwords do not match']);
    }
    else
    {
      return view('setting',['error2'=>'old password is wrong']);
    }
   }
    
}