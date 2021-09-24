<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function index()
    {
        return response (
            [
                "code" =>200,
                "usercode" =>55300,
                "family" =>"pdram",
            ]
        );
    }
}
