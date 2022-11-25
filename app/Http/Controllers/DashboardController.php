<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WargaModel;
use App\Models\User;
use App\Models\MutasiModel;
use App\Models\KartukeluargaModel;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\KartukeluargaController;

class DashboardController extends Controller
{
    public function index() {
        $warga = WargaModel::count();
        // $kartukeluarga = KartukeluargaModel::where('nomor_keluarga', '1')->count();
        $user = User::count();
        $mutasi = MutasiModel::count();
        $kartukeluarga = KartukeluargaModel::count();
        // $kartukeluarga = KartukeluargaModel::count();
        return view('dashboard.v_dashboard', compact('warga', 'user', 'mutasi', 'kartukeluarga'));
    }

}
