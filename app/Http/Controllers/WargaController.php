<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WargaModel;
use App\Models\MutasiModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;


class WargaController extends Controller
{
    protected $WargaModel;
    protected $MutasiModel;
    public function __construct()
    {
        $this->WargaModel = new WargaModel();
    }

    public function index()
    {
        // $year = Carbon::now()->format('Y');
        $data = [
            // 'warga' => WargaModel::all(),
            'warga' => DB::select(DB::raw("SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_warga`, CURDATE()) AS usia_warga FROM warga")),
            'hitungwarga' => WargaModel::count(),
            'laki' => WargaModel::where('jenis_kelamin_warga', 'L')->count(),
            'perempuan' => WargaModel::where('jenis_kelamin_warga', 'P')->count(),
            'lebihdari17' => DB::select(DB::raw("SELECT COUNT(*) AS total FROM warga WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) >= 17 AND tanggal_lahir_warga != '2022-12-23'")),
            'kurangdari17' => DB::select(DB::raw("SELECT COUNT(*) AS total FROM warga WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) < 17 AND tanggal_lahir_warga != '2022-12-23'"))
        ];


        return view('warga.v_datawarga', $data);
        // dd($data);

        // "total": 5
    }

    public function detail($nik_warga)
    {
        if (!$this->WargaModel->detailData($nik_warga)) {
            abort(404);
        }

        $data = [
            'warga' => $this->WargaModel->detailData($nik_warga),
        ];
        return view('warga.v_detailwarga', $data);
    }

    public function add()
    {
        return view('warga.v_addwarga');
    }

    public function insert(Request $request)
    {
        $validated = $request->validate([
            'nik_warga' => 'required|unique:warga|min:13|max:20',
            'nama_warga' => 'required|min:5|max:255',
            'tempat_lahir_warga' => 'required|min:5|max:255',
            'tanggal_lahir_warga' => 'required',
            'jenis_kelamin_warga' => 'required',
            'alamat_ktp_warga' => 'required',
            'alamat_warga' => 'required',
            'desa_kelurahan_warga' => 'required',
            'kecamatan_warga' => 'required',
            'kabupaten_kota_warga' => 'required',
            'provinsi_warga' => 'required',
            'negara_warga' => 'required',
            'rt_warga' => 'required',
            'rw_warga' => 'required',
            'agama_warga' => 'required',
            'pendidikan_terakhir_warga' => 'required',
            'pekerjaan_warga' => 'required|min:5|max:255',
            'status_perkawinan_warga' => 'required',
            'status_warga' => 'required',

        ]);

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

    public function edit($nik_warga)
    {
        if (!$this->WargaModel->detailData($nik_warga)) {
            abort(404);
        }

        $data = [
            'warga' => $this->WargaModel->detailData($nik_warga),
        ];
        return view('warga.v_editwarga', $data);
    }

    public function update($nik_warga)
    {
        Request()->validate([
            'nik_warga' => 'required|min:13|max:20',
            'nama_warga' => 'required|min:5|max:255',
            'tempat_lahir_warga' => 'required|min:5|max:255',
            'tanggal_lahir_warga' => 'required',
            'jenis_kelamin_warga' => 'required',
            'alamat_ktp_warga' => 'required',
            'alamat_warga' => 'required',
            'desa_kelurahan_warga' => 'required',
            'kecamatan_warga' => 'required',
            'kabupaten_kota_warga' => 'required',
            'provinsi_warga' => 'required',
            'negara_warga' => 'required',
            'rt_warga' => 'required',
            'rw_warga' => 'required',
            'agama_warga' => 'required',
            'pendidikan_terakhir_warga' => 'required',
            'pekerjaan_warga' => 'required|min:5|max:255',
            'status_perkawinan_warga' => 'required',
            'status_warga' => 'required',

        ]);
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

    public function delete($nik_warga)
    {
        $this->WargaModel->deleteData($nik_warga);
        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Hapus');
    }

    public function mutasi($nik_warga)
    {
        if (!$this->WargaModel->detailData($nik_warga)) {
            abort(404);
        }

        $data = [
            'warga' => $this->WargaModel->detailData($nik_warga),
        ];
        return view('mutasi.v_addmutasi', $data);
    }

    public function addMutasi(Request $request, $nik_warga)
    {
        $validated = $request()->validate([
            'nik_mutasi' => 'required|min:13|max:20',
            'nama_mutasi' => 'required|min:5|max:255',
            'tempat_lahir_mutasi' => 'required|min:5|max:255',
            'tanggal_lahir_mutasi' => 'required',
            'jenis_kelamin_mutasi' => 'required',
            'alamat_ktp_mutasi' => 'required|min:5|max:255',
            'alamat_mutasi' => 'required|min:5|max:255',
            'desa_kelurahan_mutasi' => 'required|min:5|max:255',
            'kecamatan_mutasi' => 'required|min:5|max:255',
            'kabupaten_kota_mutasi' => 'required|min:5|max:255',
            'provinsi_mutasi' => 'required|min:5|max:255',
            'negara_mutasi' => 'required|min:5|max:255',
            'rt_mutasi' => 'required',
            'rw_mutasi' => 'required',
            'agama_mutasi' => 'required',
            'pendidikan_terakhir_mutasi' => 'required',
            'pekerjaan_mutasi' => 'required|min:5|max:255',
            'status_perkawinan_mutasi' => 'required',
            'status_mutasi' => 'required'
        ]);
        $data = [
            'alamat_ktp_mutasi' => Request()->alamat_mutasi,
            'alamat_mutasi' => Request()->alamat_mutasi,
            'desa_kelurahan_mutasi' => Request()->desa_kelurahan_mutasi,
            'kecamatan_mutasi' => Request()->kecamatan_mutasi,
            'kabupaten_kota_mutasi' => Request()->kabupaten_kota_mutasi,
            'provinsi_mutasi' => Request()->provinsi_mutasi,
            'negara_mutasi' => Request()->negara_mutasi,
            'rt_mutasi' => Request()->rt_mutasi,
            'rw_mutasi' => Request()->rw_mutasi,
        ];

        $this->MutasiModel->addData($data);
        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Mutasi');
    }

    public function print()
    {
        $data = [
            'warga' => $this->WargaModel->allData(),
        ];
        return view('warga.v_printdatawarga', $data);
    }

    public function downloadpdf()
    {
        $data = [
            'warga' => $this->WargaModel->allData(),
        ];
        $html = view('warga.v_downloadpdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Laporan-Data-Warga.pdf');
    }

    public function cetakwarga($nik_warga)
    {
        $data = [
            'warga' => $this->WargaModel->detailData($nik_warga),
        ];
        return view('warga.v_cetakwarga', $data);
    }

    public function printdatawarga($nik_warga)
    {
        $data = [
            'warga' => $this->WargaModel->detailData($nik_warga),
        ];
        return view('warga.printdatawarga', $data);
    }

    public function downloadpdfwarga($nik_warga)
    {
        $data = [
            'warga' => $this->WargaModel->detailData($nik_warga),
        ];
        $html = view('warga.downloadpdfwarga', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('Download-Data-Warga.pdf');
    }

    public function cetaklaporan()
    {
        $data = [
            'warga' => $this->WargaModel->allData(),
        ];
        return view('warga.v_cetaklaporan', $data);
    }

    public function downloadlaporanpdf()
    {
        $data = [
            'warga' => $this->WargaModel->allData(),
        ];
        $html = view('warga.downloadlaporanpdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('Download-Laporan-Warga.pdf');
    }

    public function printlaporan()
    {
        $data = [
            'warga' => $this->WargaModel->allData(),
        ];
        return view('warga.printlaporan', $data);
    }
}
