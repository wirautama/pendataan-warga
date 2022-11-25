<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->User = new User();
    }

    public function index(){
        return view('registration.v_registration');
    }

    public function register(Request $request){

        // return $request->file('image')->store('user-image');
       $validatedData = $request->validate([
           'name' => 'required|max:255',
           'level' => 'required',
           'email' => 'required|email:dns|unique:users',
           'address' => 'required|max:255',
           'phone' => 'required|min:10|max:13',
           'image' => 'required|image|file|max:1024',
           'password' => 'required|min:5|max:255'
        ]);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('public/user-image');
        }
        // $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        // $request->session()->flash('success', 'Registrasi Berhasil! Silahkan Login');
        return redirect('login')->with('success', 'Registrasi Berhasil! Silahkan Login');
        // dd($request);
    }

}
