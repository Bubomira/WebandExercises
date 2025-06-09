<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

use App\Models\User;

class RegisteredUserController extends Controller
{
   public function create()
    {
        return view('auth.register');
    }

   public function store(Request $request)
   {
      $userAttributes = $request->validate([
        'name'=> ['required'],
        'email'=> ['required','email','unique:users,email'],
        'password'=> ['required','confirmed',Password::min(6)],
      ]);

      $employerAtributes = $request->validate([
        'employer'=> ['required'],
        'logo'=> ['required',File::types(['png','jpg','webp'])],
      ]);

      $user = User::create($userAttributes);

      $logoPath= $request->logo ->store('logos');

      $user->employer()->create([
        'name'=> $employerAtributes['employer'],
        'logo'=>$logoPath
      ]);

      Auth::login($user);

      return redirect('/');

   }
}