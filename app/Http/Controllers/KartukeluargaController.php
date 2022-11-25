<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartukeluargaModel;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\Warga_has_kartu_keluargaController;
use App\Models\Warga_has_kartu_keluargaModel;
use App\Models\WargaModel;
use Carbon\Carbon;
use Dompdf\Dompdf;
use DB;

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
            'hitungkeluarga' => KartukeluargaModel::count(),
        ];
        return view('kartukeluarga.v_kartukeluarga', $data);
        // dd($data);
    }

    public function detail($nomor_keluarga) {
        if(!$this->KartukeluargaModel->detailData($nomor_keluarga)){
            abort(404);
        }

        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
            'anggota_keluarga' => $this->KartukeluargaModel->anggotaKeluarga($nomor_keluarga),
            'warga' => $this->WargaModel->allData(),
            'hitung_anggota' => $this->KartukeluargaModel->hitungAnggota($nomor_keluarga)
        ];

         return view('kartukeluarga.v_detailkartukeluarga', $data);
    }
    
    public function edit($nomor_keluarga) {
        if(!$this->KartukeluargaModel->detailData($nomor_keluarga)){
            abort(404);
        }

        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
            'data_warga' => $this->WargaModel->allData()  
        ];
        // dd($data);
        return view('kartukeluarga.v_editkartukeluarga', $data);
    }

    public function update($nomor_keluarga) {
        Request()->validate([
            'nomor_keluarga' => 'required',
            'nik_kepala_keluarga' => 'required',
            'alamat_keluarga' => 'required',
            'desa_kelurahan_keluarga' => 'required',
            'kecamatan_keluarga' => 'required',
            'kabupaten_kota_keluarga' => 'required',
            'provinsi_keluarga' => 'required',
            'negara_keluarga' => 'required',
            'rt_keluarga' => 'required',
            'rw_keluarga' => 'required',
            'kode_pos_keluarga' => 'required',

        ]);
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
            'id_user' => '1',
            'updated_at' => Carbon::now()->toDateTimeString()

        ];
        $this->KartukeluargaModel->editData($nomor_keluarga, $data);
        return redirect()->route('kartukeluarga')->with('pesan', 'Data Berhasil Di Update');
        // dd($data);

    }

    // public function addAnggota($nomor_keluarga, $nik_warga){
    //     $data = [
    //         'warga' => WargaModel::where('nik_warga', '=', $nik_warga),
    //         'kartukeluarga' => KartukeluargaModel::where('nomor_keluarga', '=', $nomor_keluarga)
    //     ];
    //     $this->KartukeluargaModel->addAnggota($nomor_keluarga, $data);
    //     return redirect()->route('kartukeluarga')->with('pesan', 'Data Anggota Keluarga Berhasil Di Update');
    // }

    public function editAnggota($nomor_keluarga) {
        if(!$this->KartukeluargaModel->detailData($nomor_keluarga)){
            abort(404);
        }

        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
            'anggota_keluarga' => $this->KartukeluargaModel->anggotaKeluarga($nomor_keluarga),
            'data_warga' => $this->WargaModel->allData()
        ];
        return view('kartukeluarga.v_editanggotakartukeluarga', $data);
    }

    public function insertAnggota(request $request, $nomor_keluarga) {
        
        $data = [
            'warga' => Request()->nik_warga,
            'nomor_keluarga' => DB::table('kartu_keluarga')->select('nomor_keluarga')->get()
    ];
        
        //  DB::table('warga_has_kartu_keluarga')->insert('nik_warga', '=', $nik_warga, 'nomor_keluarga', '=', $nomor_keluarga);
        //  $query = Warga_has_kartu_keluargaModel::insert('nik_warga','nomor_keluarga' ($nik_warga));
        // $nomor_keluarga = KartukeluargaModel::find(1); 
 
        Warga_has_kartu_keluargaModel::insert($data);

        dd($data);
     }
    

    public function add(){

        $data = [
            'warga' => $this->WargaModel->allData(),
        ];
        return view('kartukeluarga.v_addkartukeluarga', $data);
    }

    public function insert(request $request) {
        Request()->validate([
            'nomor_keluarga' => 'required|unique:kartu_keluarga|min:16|max:20',
            'nik_kepala_keluarga' => 'required|min:16|max:20',
            'alamat_keluarga' => 'required',
            'desa_kelurahan_keluarga' => 'required|min:5|max:255',
            'kecamatan_keluarga' => 'required|min:5|max:255',
            'kabupaten_kota_keluarga' => 'required|min:5|max:255',
            'provinsi_keluarga' => 'required|min:5|max:255',
            'negara_keluarga' => 'required|min:5|max:255',
            'rt_keluarga' => 'required',
            'rw_keluarga' => 'required',
            'kode_pos_keluarga' => 'required|min:5|max:5',

        ]);
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

    public function cetakkartukeluarga($nomor_keluarga) {
        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
            'anggota_keluarga' => $this->KartukeluargaModel->anggotaKeluarga($nomor_keluarga),
            'warga' => $this->WargaModel->allData(),
            'hitung_anggota' => $this->KartukeluargaModel->hitungAnggota($nomor_keluarga)
        ];
        return view('kartukeluarga.v_cetakkartukeluarga', $data);

    }

    public function print($nomor_keluarga) {
        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
            'anggota_keluarga' => $this->KartukeluargaModel->anggotaKeluarga($nomor_keluarga),
            'warga' => $this->WargaModel->allData(),
            'hitung_anggota' => $this->KartukeluargaModel->hitungAnggota($nomor_keluarga)
        ];
        return view('kartukeluarga.v_printkk', $data);
     }
    

     public function downloadkkpdf($nomor_keluarga) {
        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->detailData($nomor_keluarga),
            'anggota_keluarga' => $this->KartukeluargaModel->anggotaKeluarga($nomor_keluarga),
            'hitung_anggota' => $this->KartukeluargaModel->hitungAnggota($nomor_keluarga)
           ];
           $html = view('kartukeluarga.downloadkkpdf', $data);
   
           $dompdf = new Dompdf();
           $dompdf->loadHtml($html);
   
           $dompdf->setPaper('A4', 'potrait');
           $dompdf->render();
           $dompdf->stream('Download-Kartu-keluarga.pdf');
     }


    public function cetaklaporankk() {
        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->allData(),
        ];
        return view('kartukeluarga.v_cetaklaporankk', $data);
     }

     public function downloadlaporankkpdf() {
        $data = [
            'kartukeluarga' => $this->KartukeluargaModel->allData(),
           ];
           $html = view('kartukeluarga.downloadlaporankkpdf', $data);
   
           $dompdf = new Dompdf();
           $dompdf->loadHtml($html);
   
           $dompdf->setPaper('A4', 'potrait');
           $dompdf->render();
           $dompdf->stream('Download-Laporan-Kartu-keluarga.pdf');
     }

     public function printlaporankk() {
        $data = [
            'kartu_keluarga' => $this->KartukeluargaModel->allData(),
        ];
        return view('kartukeluarga.printlaporankk', $data);
     }
}
