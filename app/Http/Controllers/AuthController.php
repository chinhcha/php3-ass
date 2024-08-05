<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Auth::user();
            return redirect('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function showFormRegister()
    {
        return view('auth.register');
    }

    public function handleRegister()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',

        ]);

        $user = User::query()->create($data);

        Mail::to(request()->email)->send(new VerifyEmail($user));
        Auth::login($user);
        request()->session()->regenerate();

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
    public function verifyemail(String $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'email_verified_at' => now(),
        ]);
        return redirect()->route('home');
    }
}
