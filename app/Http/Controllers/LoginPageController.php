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
        
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('username', 'password')))
        {
            return redirect('/home');
        } else{
            return redirect('/login');
        }
    }

    public function logout() {
        Auth::logout();

        return redirect('/login');
    }

    public function noauth() {
        return view('utils.noauth');
    }
}
