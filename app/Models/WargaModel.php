<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\WargaModel;

class WargaModel extends Model
{
    public $table = "warga";


    protected $fillable = [
        'nik_warga', 
        'nama_warga', 
        'tempat_lahir_warga', 
        'tanggal_lahir_warga', 
        'jenis_kelamin_warga',
        'alamat_ktp_warga',
        'alamat_warga',
        'desa_kelurahan_warga',
        'kecamatan_warga',
        'kabupaten_kota_warga',
        'provinsi_warga',
        'rt_warga',
        'rw_warga',
        'agama_warga',
        'pendidikan_terakhir_warga',
        'status_perkawinan_warga',
        'status_warga',
        'id_user'
    ];
    public function allData(){
        return DB::table('warga')->get();
    }

    // public function count(){
    //     return DB::table('warga')->count();
    // }



    public function detailData($nik_warga) {
        return DB::table('warga')->where('nik_warga', $nik_warga)->first();
    }


    public function addData($data){
        
        DB::table('warga')->insert($data);

    }

    public function editData($nik_warga, $data){
        DB::table('warga')->where('nik_warga', $nik_warga)->update($data);
    }

    public function deleteData($nik_warga){
        DB::table('warga')->where('nik_warga', $nik_warga)->delete();
    }
}
