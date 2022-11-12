<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartukeluargaModel;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\Warga_has_kartu_keluargaController;
use App\Models\Warga_has_kartu_keluargaModel;
use App\Models\WargaModel;
use Carbon\Carbon;

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
            'anggota_keluarga' => $this->KartukeluargaModel->anggotaKeluarga($nomor_keluarga),
            'warga' => $this->WargaModel->allData()
        ];
       
        // dd($data);

        // 'kartu_keluarga' = $this->KartukeluargaModel->detailData($nomor_keluarga),
        // 'anggota_keluarga' = $this->Warga_has_kartu_keluargaModel->anggotaKeluarga(),
        // 'warga' = $this->WargaModel->allData()

         return view('kartukeluarga.v_detailkartukeluarga', $data);
    }
    
    public function edit($nomor_keluarga) {
        if(!$this->KartukeluargaModel->detailData($nomor_keluarga)){
            abort(404);
        }

        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
            'anggota_keluarga' => $this->KartukeluargaModel->anggotaKeluarga($nomor_keluarga),
            'data_warga' => $this->WargaModel->allData()
        ];
        // dd($data);
        return view('kartukeluarga.v_editkartukeluarga', $data);
    }

    public function editAnggota($nomor_keluarga) {
        if(!$this->KartukeluargaModel->detailData($nomor_keluarga)){
            abort(404);
        }

        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
            'anggota_keluarga' => $this->KartukeluargaModel->anggotaKeluarga($nomor_keluarga),
            'data_warga' => $this->WargaModel->allData()
        ];
        // dd($data);
        // $warga = [
        //     'warga' => $this->WargaModel->allData(),
        // ];
        return view('kartukeluarga.v_editanggotakartukeluarga', $data);
    }

    public function add(){

        $data = [
            'warga' => $this->WargaModel->allData(),
        ];
        return view('kartukeluarga.v_addkartukeluarga', $data);
    }

    public function insert() {
        $data = [
            'nomor_keluarga' => Request()->nomor_keluarga,
            'nik_kepala_keluarga' => Request()->nik_kepala_keluarga,
            'alamat_keluarga' => Request()->alamat_keluarga,
            'desa_kelurahan_keluarga' => Request()->desa_kelurahan_keluarga,
            'kecamatan_keluarga' => Request()->kecamatan_keluarga,
            'kabupaten_kota_keluarga' => Request()->kabupaten_kota_keluarga,
            'provinsi_keluarga' => Request()->provinsi_keluarga,
            'negara_keluarga' => Request()->negara_keluarga,
            'rt_keluarga' => Request()->rt_keluarga,
            'rw_keluarga' => Request()->rw_keluarga,
            'kode_pos_keluarga' => Request()->kode_pos_keluarga,
            'negara_keluarga' => Request()->negara_keluarga,
            'rt_keluarga' => Request()->rt_keluarga,
            'rw_keluarga' => Request()->rw_keluarga,
            'id_user' => '1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
            
        ];
        $this->KartukeluargaModel->addData($data);
        return redirect()->route('kartukeluarga')->with('pesan', 'Data Berhasil Di Tambahkan');
    }

    public function delete($nomor_keluarga) {
        $this->KartukeluargaModel->deleteData($nomor_keluarga);
        return redirect()->route('kartukeluarga')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
