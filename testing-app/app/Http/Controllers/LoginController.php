<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){

        
        $attributes = request()->validate([
            'email' =>['required', 'email'],
            'password'=>['required'],
        ]);

        
    }
}
