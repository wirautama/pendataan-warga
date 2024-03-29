<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MutasiModel;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;

class MutasiController extends Controller
{
    protected $MutasiModel;
    public function __construct()
    {
        $this->MutasiModel = new MutasiModel();
    }

    public function index()
    {
        $data = [
            'mutasi' => DB::select(DB::raw("SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_mutasi`, CURDATE()) AS usia_mutasi FROM mutasi")),
            'hitungmutasi' => MutasiModel::count(),
            'laki' => MutasiModel::where('jenis_kelamin_mutasi', 'L')->count(),
            'perempuan' => MutasiModel::where('jenis_kelamin_mutasi', 'P')->count(),
            'lebihdari17' => DB::select(DB::raw("SELECT COUNT(*) AS total FROM mutasi WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_mutasi, CURDATE()) >= 17 AND tanggal_lahir_mutasi != '2022-12-23'")),
            'kurangdari17' => DB::select(DB::raw("SELECT COUNT(*) AS total FROM mutasi WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_mutasi, CURDATE()) < 17 AND tanggal_lahir_mutasi != '2022-12-23'"))
        ];
        return view('mutasi.v_mutasi', $data);
    }

    public function detail($nik_mutasi)
    {
        if (!$this->MutasiModel->detailData($nik_mutasi)) {
            abort(404);
        }

        $data = [
            'mutasi' => $this->MutasiModel->detailData($nik_mutasi),
        ];
        return view('mutasi.v_detailmutasi', $data);
    }

    public function detailData($nik_mutasi)
    {
        return DB::table('mutasi')->where('nik_mutasi', $nik_mutasi)->first();
    }

    public function delete($nik_mutasi)
    {
        $this->MutasiModel->deleteData($nik_mutasi);
        return redirect()->route('mutasi')->with('pesan', 'Data Berhasil Di Hapus');
    }

    public function insert($nik_warga)
    {
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
            'id_user' => auth()->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()

        ];
        $this->MutasiModel->addData($data);
        return redirect()->route('warga')->with('pesan', 'Data Berhasil Di Mutasikan');
    }

    public function cetaklaporanmutasi()
    {
        $data = [
            'mutasi' => $this->MutasiModel->allData(),
        ];
        return view('mutasi.v_cetaklaporanmutasi', $data);
    }

    public function downloadlaporanmutasi()
    {
        $data = [
            'mutasi' => $this->MutasiModel->allData(),
        ];
        $html = view('mutasi.downloadlaporanmutasi', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('Download-Laporan-Mutasi.pdf');
    }
    public function printlaporanmutasi()
    {
        $data = [
            'mutasi' => $this->MutasiModel->allData(),
        ];
        return view('mutasi.printlaporanmutasi', $data);
    }

    public function cetakmutasi($nik_mutasi)
    {
        $data = [
            'mutasi' => $this->MutasiModel->detailData($nik_mutasi),
        ];
        return view('mutasi.v_cetakmutasi', $data);
    }

    public function printmutasi($nik_mutasi)
    {
        $data = [
            'mutasi' => $this->MutasiModel->detailData($nik_mutasi),
        ];
        return view('mutasi.printmutasi', $data);
    }

    public function downloadmutasi($nik_warga)
    {
        $data = [
            'mutasi' => $this->MutasiModel->detailData($nik_warga),
        ];
        $html = view('mutasi.downloadmutasi', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        $dompdf->stream('Download-Data-Mutasi.pdf');
    }
}
