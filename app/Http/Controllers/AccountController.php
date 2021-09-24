<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Routing\Redirector;

class AccountController extends Controller
{
    public function registerx(Request $request)//: Response
    {
         try
         { 
            new Hash($request->password);
            $item = \App\Models\User::query()
                ->where('email', $request->email)
                ->first();//firstOrFail();        
                // return $request->email; 
         }
         catch( Exception $ex)
         {
            echo"err:".$ex;
         }
         //_________________________
        $has="";
        $pss="";
        if($item==null)
        {
            $item="null";
        }
        else
        {
            $pss=$item->password;
        }
        if($pss==null){$pss="null";}
        if (!Hash::check($request->password, $pss)) 
        { 
            $str=  "<hr>" 
            ."itemname=".($request->name)."<hr>" 
            ."itemmail=".($request->email)."<hr><a href='\'>Home</a>";

            
            $user = new User;
            $user->fill($request->all());
            $user->password = Hash::make($request->password);
            $token = Str::random(100);
            $user->token = hash('sha256', $token);
            try{
                $user->save();
            }
            catch( Exception $ex)
            {
                echo"err:".$ex;
            }
            //echo "<<<".$user.">>>"; 
            //dd($item->name);response($user->toArray() .
            return " <hr>  User Save Now.OK<br>کاربر با موفقیت ذخیره شد".$str;
        }
        else
        {
            $str=  "<hr>"
            //."email=".$request->email."<hr>" 
            //."pass=".$request->password."<hr>" 
             //."request=".$request."<hr>" 
            //."item=".$item."<hr>" 
            ."itemname=".($item->name)."<hr>" 
            ."itemmail=".($item->email)."<hr>"
            ."<a href='\'>Home</a>";
            return response("<br>کاربر قبلا تعریف شده بود<br>ok user:".$str);
        }
    }

  
    public function loginx(Request $request)
    {
        new Hash($request->password);
        $item = \App\Models\User::query()
            ->where('email', $request->email)
            ->firstOrFail(); 
 
        $has="";
        if (!Hash::check($request->password, $item->password)) 
        { 
            //throw new \ErrorException('Error user and password not found');
            $str=  "<hr>"
            ."email=".$request->email."<hr>" 
            ."pass=".$request->password."<hr>" 
            ."request=".$request."<hr>" 
            ."item=".$item."<hr>" 
            ."itemname=".($item->name)."<hr>" 
            ."itemmail=".($item->email)."<hr><a href='\'>Home</a>";

            return 'Error user and password not found'.$str;
            //redirect()->away('http://google.com');
        }
        else
        {
            $str=  "<hr>"
            //."email=".$request->email."<hr>" 
            //."pass=".$request->password."<hr>" 
             //."request=".$request."<hr>" 
            //."item=".$item."<hr>" 
            ."itemname=".($item->name)."<hr>" 
            ."itemmail=".($item->email)."<hr>"
            ."<a href='\'>Home</a>";
           // return redirect()->route('/greeting', ['name' =>   "<br>ok user:".$str]);
           // return  "<br>ok user:".$str."<hr>".route('greeting');
           return view('greeting',[
               //'name'=>"<br>ok user:".$str."<hr>",
               'ke'=>$item->email,
               'nm'=>$item->name,
        ]);
        }
 
        //return response($item);
         
    }

    public function logout(Request $request)
    {
        dd("logout");
    }
}
 

