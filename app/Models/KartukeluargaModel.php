<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\KartukeluargaModel;

class KartukeluargaModel extends Model
{
    public function allData()
    {
        return DB::table('kartu_keluarga')
        // ->leftJoin('warga', 'nik_warga', '=', 'kartu_keluarga.nomor_keluarga')
        ->leftJoin('warga', 'kartu_keluarga.nik_kepala_keluarga', '=', 'warga.nik_warga')
        ->get();

    
    }

    public function addData($data){
        
        $warga = DB::table('warga')->get();
        DB::table('kartukeluarga')->insert($data);
        // $data = DB::table('warga')->get();

    }

    public function detailData($nomor_keluarga) {
        return DB::table('kartu_keluarga')
        ->join('warga', 'nik_warga', '=', 'warga.nik_warga')
        ->where('nomor_keluarga', $nomor_keluarga)->first();

        // $anggota_keluarga = DB::table('warga')
        // ->select('*')
        // ->join('warga_has_kartu_keluarga', 'warga_has_kartu_keluarga.nik_warga', '=', 'warga.nik_warga')
        // ->where('warga_has_kartu_keluarga.nomor_keluarga', 'nomor_keluarga')->get();
        
        // $query_anggota = "SELECT *
        // from warga INNER JOIN warga_has_kartu_keluarga
        // ON warga_has_kartu_keluarga.nik_warga = warga.nik_warga
        // WHERE warga_has_kartu_keluarga.nomor_keluarga = $get_nomor_keluarga";   
    }

    public function editData($nomor_keluarga, $data){
        DB::table('kartu_keluarga')->where('nomor_keluarga', $nomor_keluarga)->update($data);
    }
}

