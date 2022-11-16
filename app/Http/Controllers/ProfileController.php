<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        // $data = [
        //     'mutasi' => $this->MutasiModel->allData(),
        // ];
        return view('profile.v_profile');
    }   
}
