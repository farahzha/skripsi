<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller

{
    public function login(){
        return view("auth.login");
    }
    public function Authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

    if(Auth::attempt($credentials)){
        return redirect('/dashboard');
}
    }
}

