<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\session;

class SessionController extends Controller
{
    //
    public function session(){
    
        session::put('name','mahmoud khaled');
        session::put('id','123');
        //return dd(session::all());

        if(session::has('name')){
            echo session::get('name')."<br>";
            echo session::get('id')."<br>";
            return 'yes';
        }
        else{
            return 'no';
        }
       // return session::get('name');
    }
    public function logout(){
         session::forget('name');
         session::forget('id');
         if(session::has('name')){
            echo session::get('name')."<br>";
            echo session::get('id')."<br>";
            return 'yes';
        }
        else{
            return 'no';
        }
    }
    public function test(){
        if(session::has('name')){
            echo session::get('name')."<br>";
            echo session::get('id')."<br>";
            return 'yes';
        }
        else{
            return 'no';
        }

    }
}

//session::flush();  تحذف كله