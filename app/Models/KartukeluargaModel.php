<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\KartukeluargaModel;

class KartukeluargaModel extends Model
{
    public $table = "kartu_keluarga";
    protected $primaryKey = "nomor_keluarga";

    protected $fillable = [
        'nomor_keluarga', 
        'nik_kepala_keluarga', 
        'alamat_keluarga', 
        'desa_kelurahan_keluarga',
        'kecamatan_keluarga',
        'kabupaten_kota_keluarga',
        'provinsi_keluarga',
        'rt_keluarga',
        'rw_keluarga',
        'kode_pos_keluarga',
        'negara_keluarga',
        'id_user'
    ];
    
    public function allData()
    {
        return DB::table('kartu_keluarga')
        ->leftJoin('warga', 'kartu_keluarga.nik_kepala_keluarga', '=', 'warga.nik_warga')
        ->get();    
    }

    public function addData($data){ 
        DB::table('kartu_keluarga')->insert($data);
    }

    public function detailData($nomor_keluarga) {
        return DB::table('kartu_keluarga')
        ->leftJoin('warga', 'kartu_keluarga.nik_kepala_keluarga', '=', 'warga.nik_warga')
        ->where('nomor_keluarga', $nomor_keluarga)->first();  
    }

    public function anggotaKeluarga($nomor_keluarga) {
        return DB::table('warga')
         ->join('warga_has_kartu_keluarga', 'warga_has_kartu_keluarga.nik_warga', '=', 'warga.nik_warga')
         ->where('warga_has_kartu_keluarga.nomor_keluarga', '=', $nomor_keluarga)->get();
    }

    public function dataWarga(){
        return DB::table('warga')->all();
    }
         


    public function editData($nomor_keluarga, $data){
        DB::table('kartu_keluarga')->where('nomor_keluarga', $nomor_keluarga)->update($data);
    }

    public function editAnggota($nomor_keluarga) {

        DB::table('warga_has_kartu_keluarga')->insert($data);
    }
    // "INSERT INTO warga_has_kartu_keluarga (nik_warga, nomor_keluarga) VALUES ('$nik_warga', '$nomor_keluarga');";

    public function insertAnggota(request $request, $nomor_keluarga){
        DB::table('warga_has_kartu_keluarga')->insert($request)->where('nomor_keluarga', '=', $nomor_keluarga);
    }

    public function deleteData($nomor_keluarga){
        DB::table('kartu_keluarga')->where('nomor_keluarga', $nomor_keluarga)->delete();
    }

    public function hitungAnggota($nomor_keluarga) {
        // SELECT COUNT(*) AS total FROM warga_has_kartu_keluarga WHERE id_keluarga = ".$kartu_keluarga['id_keluarga']
        return DB::table('warga_has_kartu_keluarga')->where('nomor_keluarga', '=', $nomor_keluarga)->count();
    }
}

