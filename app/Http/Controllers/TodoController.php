<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
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
        $request->validate([
            'title' => 'required',
            'dec' => 'required'
        ]);

        $my_title = $request->input('title');
        $my_dec = $request->input('dec');

        // echo "$my_title   $my_dec";
        $todo = new todo();
        $todo->title = $my_title;
        $todo->description = $my_dec;
        $todo->save();

        
        // return redirect()->route('home');
        return redirect('/');
    }

    /** 
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        // return view("home");
        return view("home")->with("alltodos", todo::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, todo $todo, $id)
    {
        $my_title = $request->input('title');
        $my_dec = $request->input('dec');

        $todo = todo::find($id);
        $todo->title = $my_title;
        $todo->description = $my_dec;
        $todo->save();

        return redirect("/");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo, $hey)
    {
        // echo "$hey";
        return view("updatedata")->with("singlerecord", todo::find($hey));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo, $myid)
    {
        // echo " data deleted";
        // echo "$myid";
        todo::destroy(array("id", $myid));
        
        return redirect('/');
    }
}
