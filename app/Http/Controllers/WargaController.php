<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\WargaModel;
use Carbon\Carbon;

class WargaController extends Controller
{
    public function __construct()
    {
        $this->WargaModel = new WargaModel();
    }

    public function index(){
        $data = [
            'warga' => $this->WargaModel->allData(),
        ];
        return view('warga.v_datawarga', $data);
    }

    public function detail($nik_warga) {
        if(!$this->WargaModel->detailData($nik_warga)){
            abort(404);
        }

        $data = [
            'warga' => $this->WargaModel->detailData($nik_warga),
        ];
        return view('warga.v_detailwarga', $data);
    }

    public function add(){
        return view('warga.v_addwarga');
    }

    public function insert(){
        $data = [
            'nik_warga' => Request()->nik_warga,
            'nama_warga' => Request()->nama_warga,
            'tempat_lahir_warga' => Request()->tempat_lahir_warga,
            'tanggal_lahir_warga' => Request()->tanggal_lahir_warga,
            'jenis_kelamin_warga' => Request()->jenis_kelamin_warga,
            'alamat_ktp_warga' => Request()->alamat_ktp_warga,
            'alamat_warga' => Request()->alamat_warga,
            'desa_kelurahan_warga' => Request()->desa_kelurahan_warga,
            'kecamatan_warga' => Request()->kecamatan_warga,
            'kabupaten_kota_warga' => Request()->kabupaten_kota_warga,
            'provinsi_warga' => Request()->provinsi_warga,
            'negara_warga' => Request()->negara_warga,
            'rt_warga' => Request()->rt_warga,
            'rw_warga' => Request()->rw_warga,
            'agama_warga' => Request()->agama_warga,
            'pendidikan_terakhir_warga' => Request()->pendidikan_terakhir_warga,
            'pekerjaan_warga' => Request()->pekerjaan_warga,
            'status_perkawinan_warga' => Request()->status_perkawinan_warga,
            'status_warga' => Request()->status_warga,
            'id_user' => '1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
            
        ];
        $this->WargaModel->addData($data);
        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Tambahkan');
    }

    public function edit($nik_warga) {
        if(!$this->WargaModel->detailData($nik_warga)){
            abort(404);
        }

        $data = [
            'warga' => $this->WargaModel->detailData($nik_warga),
        ];
        return view('warga.v_editwarga', $data);
    }

    public function update($nik_warga){
        // Request()->validate([
        //     'nik_warga' => 'required',
        //     'nama_warga' => 'required',
        //     'tempat_lahir_warga' => 'required',
        //     'tanggal_lahir_warga' => 'required',
        //     'jenis_kelamin_warga' => 'required',
        //     'alamat_ktp_warga' => 'required',
        //     'alamat_warga' => 'required',
        //     'desa_kelurahan_warga' => 'required',
        //     'kecamatan_warga' => 'required',
        //     'kabupaten_kota_warga' => 'required',
        //     'provinsi_warga' => 'required',
        //     'negara_warga' => 'required',
        //     'rt_warga' => 'required',
        //     'rw_warga' => 'required',
        //     'agama_warga' => 'required',
        //     'pendidikan_terakhir_warga' => 'required',
        //     'pekerjaan_warga' => 'required',
        //     'status_perkawinan_warga' => 'required',
        //     'status_warga' => 'required',
            

        // ]);
        $data = [
            'nik_warga' => Request()->nik_warga,
            'nama_warga' => Request()->nama_warga,
            'tempat_lahir_warga' => Request()->tempat_lahir_warga,
            'tanggal_lahir_warga' => Request()->tanggal_lahir_warga,
            'jenis_kelamin_warga' => Request()->jenis_kelamin_warga,
            'alamat_ktp_warga' => Request()->alamat_ktp_warga,
            'alamat_warga' => Request()->alamat_warga,
            'desa_kelurahan_warga' => Request()->desa_kelurahan_warga,
            'kecamatan_warga' => Request()->kecamatan_warga,
            'kabupaten_kota_warga' => Request()->kabupaten_kota_warga,
            'provinsi_warga' => Request()->provinsi_warga,
            'negara_warga' => Request()->negara_warga,
            'rt_warga' => Request()->rt_warga,
            'rw_warga' => Request()->rw_warga,
            'agama_warga' => Request()->agama_warga,
            'pendidikan_terakhir_warga' => Request()->pendidikan_terakhir_warga,
            'pekerjaan_warga' => Request()->pekerjaan_warga,
            'status_perkawinan_warga' => Request()->status_perkawinan_warga,
            'status_warga' => Request()->status_warga,
            'updated_at' => Carbon::now()->toDateTimeString()

        ];
        $this->WargaModel->editData($nik_warga, $data);
        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Update');
    }

    public function delete($nik_warga) {
        $this->WargaModel->deleteData($nik_warga);
        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Hapus');
    }

    public function mutasi($nik_warga) {
        if(!$this->WargaModel->detailData($nik_warga)){
            abort(404);
        }

        $data = [
            'warga' => $this->WargaModel->detailData($nik_warga),
        ];
        return view('mutasi.v_addmutasi', $data);
    }

    public function addMutasi($nik_warga) {
        $this->MutasiModel->addData($data);
        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Mutasi');
    }
}
 