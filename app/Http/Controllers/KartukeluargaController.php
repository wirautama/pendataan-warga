<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartukeluargaModel;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\Warga_has_kartu_keluargaController;
use App\Models\Warga_has_kartu_keluargaModel;
use App\Models\WargaModel;

class KartukeluargaController extends Controller
{
    public function __construct()
    {
        $this->KartukeluargaModel = new KartukeluargaModel();
        $this->Warga_has_kartu_keluargaModel = new Warga_has_kartu_keluargaModel();
        $this->WargaModel = new WargaModel();
       
    }

    public function index() {
        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->allData(),
        ];
        return view('kartukeluarga.v_kartukeluarga', $data);
    }

    public function detail($nomor_keluarga) {
        if(!$this->KartukeluargaModel->detailData($nomor_keluarga)){
            abort(404);
        }

        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
            // 'anggota_keluarga' => $this->Warga_has_kartu_keluargaModel->anggotaKeluarga($nomor_keluarga),
            // 'warga' => $this->WargaModel->detailData($nomor_keluarga)
        ];

         return view('kartukeluarga.v_detailkartukeluarga', $data);
    }
    
    public function edit($nomor_keluarga) {
        if(!$this->KartukeluargaModel->detailData($nomor_keluarga)){
            abort(404);
        }

        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
        ];
        return view('kartukeluarga.v_editkartukeluarga', $data);
    }

    public function add(){
        return view('kartukeluarga.v_addkartukeluarga');
    }
}
