<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserAuth;
use Illuminate\Container\Attributes\Auths;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required',
        ]);

        // Create user logic here

        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }

    public function create()
    {
        return view('auths.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:auths,email',
            'phone' => 'required',
            'password' => 'required|min:6',
        ]);

        UserAuth::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'User registered successfully!');
    }




    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Authentication logic here

        return redirect()->route('dashboard')->with('success', 'Login successful!');
    }
}
