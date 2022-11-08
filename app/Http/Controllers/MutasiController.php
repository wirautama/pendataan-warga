<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutasiModel;
use Carbon\Carbon;

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

    public function insert($nik_warga) {
        $data = [
            'nik_mutasi' => Request()->nik_mutasi,
            'nama_mutasi' => Request()->nama_mutasi,
            'tempat_lahir_mutasi' => Request()->tempat_lahir_mutasi,
            'tanggal_lahir_mutasi' => Request()->tanggal_lahir_mutasi,
            'jenis_kelamin_mutasi' => Request()->jenis_kelamin_mutasi,
            'alamat_ktp_mutasi' => Request()->alamat_ktp_mutasi,
            'alamat_mutasi' => Request()->alamat_mutasi,
            'desa_kelurahan_mutasi' => Request()->desa_kelurahan_mutasi,
            'kecamatan_mutasi' => Request()->kecamatan_mutasi,
            'kabupaten_kota_mutasi' => Request()->kabupaten_kota_mutasi,
            'provinsi_mutasi' => Request()->provinsi_mutasi,
            'negara_mutasi' => Request()->negara_mutasi,
            'rt_mutasi' => Request()->rt_mutasi,
            'rw_mutasi' => Request()->rw_mutasi,
            'agama_mutasi' => Request()->agama_mutasi,
            'pendidikan_terakhir_mutasi' => Request()->pendidikan_terakhir_mutasi,
            'pekerjaan_mutasi' => Request()->pekerjaan_mutasi,
            'status_perkawinan_mutasi' => Request()->status_perkawinan_mutasi,
            'status_mutasi' => Request()->status_mutasi,
            'id_user' => '1',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
            
        ];
        $this->MutasiModel->addData($data);
        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Mutasikan');
    }

}
