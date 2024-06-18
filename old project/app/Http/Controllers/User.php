<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function showhomepage(){
        echo "helloo";
    }

    function hloo(){
        // echo "this is hlooo fucnton";
        return view("auth.login");
    }
}
