<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartukeluargaModel;

class KartukeluargaController extends Controller
{
    public function __construct()
    {
        $this->KartukeluargaModel = new KartukeluargaModel();
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
