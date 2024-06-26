<?php

namespace App\Http\Controllers;

use App\Models\newcontact;
use Illuminate\Http\Request;

class NewcontactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        $useremail = $request->input('pnumber');

        // echo "$$username";

        $my_data = new newcontact;
        $my_data->Username = $username;
        $my_data->Full_Name = $full_name;
        $my_data->Email = $useremail;
        $my_data->Phone_Number = $useremail;
        $my_data->save();

        echo "data saved sucessfully in database.";

    }

    /**
     * Display the specified resource.
     */
    public function show(newcontact $newcontact)
    {
        return view('about')->with('allcontactus', newcontact::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newcontact $newcontact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, newcontact $newcontact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(newcontact $newcontact)
    {
        //
    }
}
