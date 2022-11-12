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
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('login');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
