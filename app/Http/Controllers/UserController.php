<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'login' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'terms' => 'accepted',
        ]);

        $user = User::query()->create([
            'name' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        session()->flash('success', 'Вы успешно зарегистрировались');
        Auth::login($user);
        return redirect()->route('home');
    }

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            session()->flash('success', 'Вы успешно зарегистрировались');
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            }
            return redirect()->route('home');
        }

        return redirect()->route('login.create');
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
