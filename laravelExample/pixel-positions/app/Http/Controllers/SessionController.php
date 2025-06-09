<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
      return view("auth.login");
    }

    public function store(Request $request){
        $attributes = request()->validate([
           'email'=>['required','email'],
           'password'=>['required'],
        ]);

        if(!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email'=>'Sorry, those credentials do not match.'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy(){
        Auth::Logout();

        return redirect('/');
    }
}
