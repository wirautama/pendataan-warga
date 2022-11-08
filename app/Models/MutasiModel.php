<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\MutasiModel;

class MutasiModel extends Model
{
    public function allData()
    {
        return DB::table('mutasi')->get();
    }

    public function detailData($nik_mutasi) {
        return DB::table('mutasi')->where('nik_mutasi', $nik_mutasi)->first();
    }

    public function addData($data) {
        DB::table('mutasi')->insert($data);
    }

    public function deleteData($nik_mutasi){
        DB::table('mutasi')->where('nik_mutasi', $nik_mutasi)->delete();
    }
}
