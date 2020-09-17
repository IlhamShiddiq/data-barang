<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginPageController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // dump($request->all());

        if(Auth::attempt($request->only('username', 'password')))
        {
            return redirect('/home');
        } else{
            return redirect('/login');
        }

    }
}
