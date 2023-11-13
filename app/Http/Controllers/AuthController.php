<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register()
    {

        return view('auth.register');
    }

    public function store()
    {


        $validated = request()->validate(
            [
                'name' => 'required',
                'username' => 'required|unique:users,username',
                'password' => 'required',
            ]
        );

        User::create(
            [
                'name' => $validated['name'],
                'username' => $validated['username'],
                'password' => Hash::make($validated['password']),
            ]
        );

        return redirect()->route('login')->with('success', 'Account created successfully');
    }

    public function login()
    {

        return view('auth.login');
    }

    public function authenticate()
    {
        $validated = request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
        );

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();
                
            return redirect()->route('dosen.index')->with('success', 'Login successfully');

        }

        return redirect()->route('login')->withErrors([
            'password' => 'Invalid username or password',
        ]);
    }

    public function logout()
    {

        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged out successfully');
    }
}
