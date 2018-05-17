<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm(){
        // dd(Hash::make('adminadmin'));
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     // dd($credentials);
    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         // dd($request);
    //         return redirect()->intended('tampil');
    //     }
    //     return redirect()->route('login-form');
    // }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
