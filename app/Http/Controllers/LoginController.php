<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
class LoginController extends Controller
{
    public function index(){
        return view('login.v_login');
    }

    // public function cekLogin(Request $request){
    //     $model = new UserModel; 
    //     $login = $model->cekLogin($request->username_user, $request->password_user);
    //     dd($login);
    // }
}
