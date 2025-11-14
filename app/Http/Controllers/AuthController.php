<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:8',
            'avatar'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $validated['role']     = 'user';
        
        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('avatars');
        }

        User::create($validated);
        return redirect()->route('login')->with('success', 'Account created successfully');
    }
}
