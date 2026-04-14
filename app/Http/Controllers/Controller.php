<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Controller
{
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = \App\Models\User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Correo o contraseña incorrectos.');
        }

        Auth::login($user);

        return redirect('Dashboard');
    }

    public function Register(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        if ($name === ''||$email === ''||$password === '') {
            return view('Register')->with('error', 'Todos los campos son requeridos.');
        }
        return view('Register');
    }
}
