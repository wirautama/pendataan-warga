<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Warga_has_kartukeluargaModel;
use App\Models\KartukeluargaModel;
use App\Models\WargaModel;

class Warga_has_kartu_keluargaModel extends Model
{
    public $table = "warga_has_kartu_keluarga";

    public function allData(){
        return DB::table('warga_has_kartu_keluarga')->get();
    }

    public function anggotaKeluarga() {
        // return DB::table('warga')
        //     ->join('warga_has_kartu_keluarga', 'warga_has_kartu_keluarga.nik_warga', '=', 'warga.nik_warga')
        //     ->where('warga_has_kartu_keluarga.nik_warga', '=', 'nomor_keluarga')
        //     ->get();
    }
}
