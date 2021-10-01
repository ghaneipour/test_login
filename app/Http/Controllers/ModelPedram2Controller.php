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
        $item = new \App\Models\modelPedram2;
        //$item->fill($request);
        $item->fname=$request->fname;
        $item->lname=$request->lname;
        $item->password=$request->address;
        $item->save();
        //return response($item);
        return response($item->toArray());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\modelPedram2  $modelPedram2
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $item = \App\Models\modelPedram2::query()->find($id);//findorfail($id)
       
       if($item==null)
       {
        echo("null :304<br>");
       }
       else
       { 
       echo(response($item)."<br>");
       }
       

        return response(200);
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
    public function update(Request $request, modelPedram2 $modelPedram2,int $id)
    {
            //dd($id."<br>".$request);
        $item = \App\Models\modelPedram2::query()->find($id);//findorfail($id)
       
       if($item==null)
       {
           echo("null :304<br>");
       }
       else
       { 
           $item->fill($request->all());
           $item->save();
           echo(response($item)."<br>");
       }
       

        return response(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\modelPedram2  $modelPedram2
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
       $item = \App\Models\modelPedram2::query()->find($id);//findorfail($id)
       
       if($item==null)
       {
        echo("Deleted old time :304<br>");
       }
       else
       {

       $item->delete();
       echo("deleted id:".$id."  :200<br>");
       }
       

        return response(200);
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
