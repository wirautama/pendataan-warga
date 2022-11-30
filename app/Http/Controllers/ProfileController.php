<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use File;

class ProfileController extends Controller
{
    public function index() {
        $data = [
            'user' => User::all(),

        ];
        return view('profile.v_profile', $data);
    }   

    public function ubahPassword(Request $request) {
        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required',
            'konfirmasi_password' => 'required|same:password_baru',
            
        ]);

        if(Hash::check($request->password_lama, auth()->user()->password)){
            auth()->user()->update(['password' => $request->konfirmasi_password]);
           return back()->with('message', 'Password Anda Telah di Ubah!'); 
        }
        throw ValidationException::withMessages([
            'password_lama' => 'Password Anda Tidak Cocok Dengan Data Kami',
        ]);
    }

    public function ubahImage(Request $request) {
        $oldImage = $request->oldImage;
        $request->validate([
            'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:1024'
        ]);
         
        if($request->file('image')){
            if($request->oldImage){
                unlink(public_path($request->oldImage));
                
            } 
            // $validatedData['image'] = $request->file('image')->store('public/user-image');
            auth()->user()->update(['image' => $request->file('image')->store('public/user-image')]);
            return back()->with('message', 'Foto Profil Anda Telah Di Ubah');    
        }
       
    }
}
