<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class learnSession extends Controller
{
    function set_session(Request $r){
        // echo "this is set session";
        $r->session()->put("name", "hellow worlld");
    }

    function get_session(Request $r){
        $data = $r->session()->get("name");
        echo $data;
    }

    function check_session(Request $r){
        if ($r->session()->has("name")){
            echo "User login";
        }else{
            echo "user not login";
        };
    }

    function remove_session(Request $r){
        $r->session()->remove("name");
     
    }


}
