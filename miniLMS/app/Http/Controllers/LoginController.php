<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
     public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request){

        $userAttributes = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        if(!Auth::attempt($userAttributes)){
          throw  ValidationException::withMessages(['email'=>'Wrong credentials']);
        }

        request()->session()->regenerate();

        return redirect('/');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/');
    }
}
