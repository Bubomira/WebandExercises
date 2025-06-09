<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name'=>['required'],
            'email'=>['required','email'],
            'password'=>['required','confirmed',Password::min(7)]
        ]);

        $user = User::create($userAttributes);

        Auth::login($user);

        return redirect('/');
    }

}
