<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutasiModel;

class MutasiController extends Controller
{
    public function __construct()
    {
        $this->MutasiModel = new MutasiModel();
    }

    public function index() {
        $data = [
            'mutasi' => $this->MutasiModel->allData(),
        ];
        return view('mutasi.v_mutasi', $data);
    }

    public function detail($nik_mutasi) {
        if(!$this->MutasiModel->detailData($nik_mutasi)){
            abort(404);
        }

        $data = [
            'mutasi' => $this->MutasiModel->detailData($nik_mutasi),
        ];
        return view('mutasi.v_detailmutasi', $data);
    }

    public function detailData($nik_mutasi) {
        return DB::table('mutasi')->where('nik_mutasi', $nik_mutasi)->first();
    }

    public function delete($nik_mutasi) {
        $this->MutasiModel->deleteData($nik_mutasi);
        return redirect()->route('mutasi')->with('pesan', 'Data Berhasil Di Hapus');
    }

}
