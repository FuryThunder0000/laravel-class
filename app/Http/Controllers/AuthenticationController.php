<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }
    public function registerView()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $nom = $request->name;
        $email = $request->email;
        $passwordhash = Hash::make($request->password);

        User::create([
            'name' => $nom,
            'email' => $email,
            'password' => $passwordhash,
        ]);

        return redirect()->route('home');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt([
            'email' => $email,
            'password' => $password,
        ])) {
            return redirect()->route('home');
        }
    }
}
