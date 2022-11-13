<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.v_login');
    }

    public function postlogin(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255'
         ]);
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard')->with('success', 'Selamat Datang');
        }
        return redirect('login')->with('failed', 'Username atau Password Salah');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/')->with('logout', 'Terima Kasih Atas Kunjungan Anda');
    }
}
