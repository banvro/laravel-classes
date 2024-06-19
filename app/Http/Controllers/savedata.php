<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class savedata extends Controller
{
    function saveing_my_data(Request $request){

        // echo "$request";
        $request->validate([
            'usernmae'=> 'required|min:3|max:8',
            'fname' => 'required',
            'email' => 'required|email',
        ]);

        echo "data saved sucessfuly";
    }
}
