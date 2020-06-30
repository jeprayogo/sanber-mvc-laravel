<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }


    public function show(Request $request)
    {
        $fname = $request->firstname;
        $lname = $request->lastname;
        $name = $fname." ".$lname;
        return view('welcome')->with('name',$name);
    }
}
