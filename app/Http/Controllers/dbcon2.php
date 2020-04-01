<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exceptions\Handler;
use App\mproduct;
use Artisan;
class dbcon2 extends Controller
{
    //
    public function store()
    {
        $conn = mysqli_connect("localhost","root","");
        $sql = 'CREATE DATABASE IF NOT EXISTS lmovies';
        mysqli_query($conn,$sql);
    	Artisan::call('migrate');
    	
    	
     $data = array(
    array('id'=>'2', 'name'=> "That is MahaLakshmi"),
    array('id'=>'3', 'name'=> "Majili"),
    array('id'=>'4', 'name'=> "Suryakantham"),
    array('id'=>'5', 'name'=> "Geetha Govindam"),
    array('id'=>'6', 'name'=> "Tholiprema"),
    array('id'=>'7', 'name'=> "GangLeader"),
    array('id'=>'8', 'name'=> "Syeraa"),
    array('id'=>'9', 'name'=> "Chanakya"),
    array('id'=>'10', 'name'=> "Saaho"),
    array('id'=>'11', 'name'=> "Simbaa"),
    array('id'=>'12', 'name'=> "URI"),
    array('id'=>'13', 'name'=> "Super 30"),
    array('id'=>'14', 'name'=> "Bharat"),
    array('id'=>'15', 'name'=> "Kalank"),
    array('id'=>'16', 'name'=> "Gully Boy"),
    array('id'=>'17', 'name'=> "Badla"),
    array('id'=>'18', 'name'=> "Luka Chuppi"),
    array('id'=>'19', 'name'=> "Total Dhamaal"),
    array('id'=>'20', 'name'=> "Spider man far from home"),
    array('id'=>'21', 'name'=> "Hobbs and shaw"),
    array('id'=>'22', 'name'=> "Joker"),
    array('id'=>'23', 'name'=> "Gemini Man"),
    array('id'=>'24', 'name'=> "John wick 3"),
    array('id'=>'25', 'name'=> "Shazam"),
    array('id'=>'26', 'name'=> "Maleficient 2"),
    array('id'=>'27', 'name'=> "Aladdin"),
    array('id'=>'28', 'name'=> "IT"),

    
);
     
     try{mproduct::insert($data);}
     catch(\Illuminate\Database\QueryException $e){
     	
     }
        
    return view('/index');
}
}
