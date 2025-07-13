<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        sleep(1);
        //Validate
        $fields = $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','email','max:255', 'unique:users'],
            'password' => ['required', 'confirmed']
        ]);
        
        
        //Register
        $user = User::create($fields);

        //Login
        Auth::login($user);

        //Redirect
        return redirect()->route('home');
        
    }

    public function login(Request $request)
    {
       
        $fields = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($fields, $request->boolean('remember'))){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        
        return back()->withErrors([
            'email' => 'Invalid Credentials'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('home');
    }
}
