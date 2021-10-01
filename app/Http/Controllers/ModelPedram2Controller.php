<?php

namespace App\Http\Controllers;

use App\Models\modelPedram2;
use Illuminate\Http\Request;

class ModelPedram2Controller extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\modelPedram2  $modelPedram2
     * @return \Illuminate\Http\Response
     */
    public function show(modelPedram2 $modelPedram2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\modelPedram2  $modelPedram2
     * @return \Illuminate\Http\Response
     */
    public function edit(modelPedram2 $modelPedram2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\modelPedram2  $modelPedram2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modelPedram2 $modelPedram2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\modelPedram2  $modelPedram2
     * @return \Illuminate\Http\Response
     */
    public function destroy(modelPedram2 $modelPedram2)
    {
        //
    }

     //   array(
        //         array (
        //             "id"=>"25",
        //             "fname"=>"pedram",
        //             "lname"=>"gha",
        //             "age"=>"33",
        //             "degree"=>"eedr",
        //             "gg"=>"34",
        //             "hh"=>"ty",
        //         )
        //         ,
        //         array("class"=>"first")
        //     );
        //$myarray=modelPedram2::all();

        public function   controller1()
        { 
            $myarray="1";
           
            $myarray="<hr>".modelPedram2::where('fname','pedram')->get();
            $myarray=$myarray."<hr>";
            $myarray=$myarray.modelPedram2::all()."<hr>";
            return response($myarray);  
        }
        public function   controller2()
        { 
           
            $myarray="2><hr>";
            $myarray=$myarray.modelPedram2::all()."<hr>";
            return response($myarray);  
        }
}
