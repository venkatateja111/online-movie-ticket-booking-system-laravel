<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class komarti extends Controller
{
    //


    public function sign1(){
        return view('/signup');
    }
    
    public function sign2(Request $res){
        print_r ($res->input());
        $res->validate([
                      
                   





        ]);
    }
}
