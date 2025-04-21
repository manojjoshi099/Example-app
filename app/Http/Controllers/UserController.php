<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //
    public function index()
{
    $users = User::all();
    return view('users.index', compact('users'));
}

public function create()
{
    return view('users.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'phone' => 'required',
    ]);
    User::create($request->all());
    return redirect()->route('users.index')->with('success', 'User added successfully');
}

public function edit(User $user)
{
    return view('users.edit', compact('user'));
}

public function update(Request $request, User $user)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'phone' => 'required',
    ]);
    $user->update($request->all());
    return redirect()->route('users.index')->with('success', 'User updated');
}

public function destroy(User $user)
{
    $user->delete();
    return redirect()->route('users.index')->with('success', 'User deleted');
}
public function show(User $user)
{
    return view('users.show', compact('user'));

}
}
