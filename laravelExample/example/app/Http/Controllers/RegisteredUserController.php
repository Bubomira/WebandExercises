<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

     public function store(){

        $attributes= request()->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'email'=> ['required','email'],
            'password'=>['required',Password::min(6),'confirmed']
        ]);

        $user = User::create($attributes);

        Auth::login($user);
        
        return redirect('/jobs');
    }
}
