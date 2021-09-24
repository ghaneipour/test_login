<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PedramController extends Controller
{
    public function MyUserVoid()
    {
        return 'ok';
    }

    public function loginFormChecker(){
        return response (["code" =>200]);
    }

    public function index()
    {
        return view('user');
    }

    public function aboutus()
    {
        return view('user');
    }

    public function contactus()
    {
        return view('user');
    }

    public function show($id)
    {
        #return view('user.profile', ['user' => User::findOrFail($id)]);
        return 'ok user' . $id . '    ';
    }


}





