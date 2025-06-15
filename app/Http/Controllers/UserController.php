<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        // https://laravel.com/docs/11.x/authentication#authenticating-users

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // return redirect()->intended('admin.main.index');
            return redirect()->route('admin.main.index');

        }

        return back()
            ->withErrors(['error' => 'The provided credentials do not match our records.',])
            ->onlyInput('email');
    }
}
