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

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     $admin = Admin::where('email', $request->email)->first();

    //     if ($admin && Hash::check($request->password, $admin->password)) {
    //         session([
    //             'admin_logged_in' => true,
    //             'admin_id' => $admin->id]);
    //         return redirect('/admin/index');
    //     }

    //     return back()->with('error', 'Invalid credentials');
    // }

    // public function logout()
    // {
    //     session()->forget('admin_id');
    //     return redirect('/admin/login');
    // }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         if (Auth::user()->role === 'admin') {
    //             $request->session()->put('admin_logged_in', true); // You might still want this session flag
    //             return redirect()->route('admin.category'); // Redirect to the admin dashboard or categories index
    //         return "Loged in successfully"; // For testing purposes, you can change this to a redirect later
    //         } else {
    //             Auth::logout(); // Log them out if they are not an admin
    //             return redirect()->route('admin.login')->withErrors(['email' => 'You do not have admin privileges.']);
    //         }
    //     }

    //     return redirect()->route('admin.login')->withErrors(['email' => 'Invalid credentials']);
    // }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                $request->session()->put('admin_logged_in', true);
                return redirect()->route('admin.index'); // Redirect to the existing admin index route
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
