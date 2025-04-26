<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminAuthController extends Controller
{

    public function showLoginForm()
    {
        return view('admin.login');

    }
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                $request->session()->put('admin_logged_in', true);
                return redirect()->route('admin.categories.index'); // Redirect to the existing admin index route
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['email' => 'You do not have admin privileges.']);
            }
        }
    
        return redirect()->route('admin.login')->withErrors(['email' => 'Invalid credentials']);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('admin_logged_in');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    
}
