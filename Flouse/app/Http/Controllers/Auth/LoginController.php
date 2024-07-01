<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index_email() {
        return view('auth/loginemail');
    }

    public function auth_email(Request $request) {
        $request->validate([
            'email' => 'required|email:dns|exists:users'
        ]);
        session()->put('email_temp', $request->email);
        return redirect('/login/password');
    }

    public function index_password() {
        $email = session()->get('email_temp');
        return view('auth/loginpassword', compact('email'));
    }

    public function auth_password(Request $request) {
        $request->validate(['password' => 'required']);

        $credentials = [
            'email' => session()->get('email_temp'),
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
