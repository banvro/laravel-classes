<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class savedata extends Controller
{
    function saveing_my_data(Request $request){

        // echo "$request";
        // $request->validate([
        //     'usernmae'=> 'required|min:3|max:8',
        //     'fname' => 'required',
        //     'email' => 'required|email',
        //     'pnumber' => 'required|min:10|max:12'
        // ]);

        // echo $request;
        $username = $request->input('usernmae');
        $full_name = $request->input('fname');
        $useremail = $request->input('em');
        $usernumber = $request->input('pnumber');

        echo "username is : $username, email is $useremail";
    }
}
