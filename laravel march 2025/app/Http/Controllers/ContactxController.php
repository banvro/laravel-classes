<?php

namespace App\Http\Controllers;

use App\Models\contactx;
use Illuminate\Http\Request;

class ContactxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "fname"=>"required|min:10|max:100",
            "mail"=>"required|email",
            "txt"=>"required",

        ]);
        // echo "data saved ";
        $name=$request->input("fname");
        $email=$request->input("mail");
        $text=$request->input("txt");

        $data = new contactx();

       $data->full_Name=$name;
       $data->email=$email;
       $data->message=$text;
        $data->save();

        echo"data saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactx  $contactx
     * @return \Illuminate\Http\Response
     */
    public function show(contactx $contactx)
    {
        $data = contactx::all();

        return view("showingdata", ["all_data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactx  $contactx
     * @return \Illuminate\Http\Response
     */
    public function edit(contactx $contactx, $id)
    {
        $x = contactx::find($id);

        return view("updatedata")->with(["data" => $x]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contactx  $contactx
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactx $contactx, $x)
    {
        $request->validate([
            "fname"=>"required|min:3|max:100",
            "email"=>"required|email",
            "msg"=>"required",

        ]);
        // echo "data saved ";
        $name=$request->input("fname");
        $email=$request->input("email");
        $text=$request->input("msg");

        $data = contactx::find($x);

       $data->full_Name=$name;
       $data->email=$email;
       $data->message=$text;
        $data->save();

        return redirect("/show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactx  $contactx
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactx $contactx, $x)
    {
        $record = contactx::find($x);

        $record->delete();

        // echo "data deleted sucessfulyy...!";

        return redirect("/show");
    }
}
