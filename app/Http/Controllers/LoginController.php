<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }
    //method untuk validasi login
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "email" => ["required", "email:dns"],
            "password" => ["required"]

        ]);
        //login berhasil
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended("/mom");
        }
        //login gagal
        return back()->with("loginError", "Login Gagal!");
    }
    //method untuk logout
    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect("/login");
    }
}
