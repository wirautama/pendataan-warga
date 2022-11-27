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
    protected $fillable = [
        'nik_warga',
        'nomor_keluarga'
    ];

    public function allData(){
        return DB::table('warga_has_kartu_keluarga')->get();
    }

    public function deleteAnggota($nik_warga, $nomor_keluarga) {
        DB::table('warga_has_kartu_keluarga')->where('nik_warga','=', $nik_warga)->where('nomor_keluarga','=', $nomor_keluarga)->delete();
    }
}
