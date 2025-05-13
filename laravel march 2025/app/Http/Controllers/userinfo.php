<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userinfo extends Controller
{
    function user(){
        echo " I am coming from controller";
    }
    function bye(){
        return view("home");
    }
    function goto(){
        echo"hello ";
        return view("authh.login");
    }
    function ok(){
        echo "karan";
        return view("authh.signup");
    }
}
