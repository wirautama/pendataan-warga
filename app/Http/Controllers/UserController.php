<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index(){
        $data = [
            'user' => $this->UserModel->allData(),
        ];
        return view('user.v_user', $data);
    }

    public function detail($id_user) {
        if(!$this->UserModel->detailData($id_user)){
            abort(404);
        }

        $data = [
            'user' => $this->UserModel->detailData($id_user),
        ];
        return view('user.v_detailuser', $data);
    }

    public function insert(){
        $data = [
            'nama_user' => Request()->nama_user,
            'username_user' => Request()->username_user,
            'password_user' => md5(Request()->password_user),
            'keterangan_user' => Request()->keterangan_user,
            'status_user' => Request()->status_user,
            'desa_kelurahan_user' => Request()->desa_kelurahan_user,
            'kecamatan_user' => Request()->kecamatan_user,
            'kabupaten_kota_user' => Request()->kabupaten_kota_user,
            'provinsi_user' => Request()->provinsi_user,
            'negara_user' => Request()->negara_user,
            'rt_user' => Request()->rt_user,
            'rw_user' => Request()->rw_user,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ];
        $this->UserModel->addData($data);
        return redirect()->route('user')->with('pesan', 'Data Berhasil Di Tambahkan');
    }

    public function edit($id_user) {
        if(!$this->UserModel->detailData($id_user)){
            abort(404);
        }

        $data = [
            'user' => $this->UserModel->detailData($id_user),
        ];
        return view('user.v_edituser', $data);
    }

    public function update($id_user) {
        $data = [
            'nama_user' => Request()->nama_user,
            'username_user' => Request()->username_user,
            'password_user' => md5(Request()->password_user),
            'keterangan_user' => Request()->keterangan_user,
            'status_user' => Request()->status_user,
            'desa_kelurahan_user' => Request()->desa_kelurahan_user,
            'kecamatan_user' => Request()->kecamatan_user,
            'kabupaten_kota_user' => Request()->kabupaten_kota_user,
            'provinsi_user' => Request()->provinsi_user,
            'negara_user' => Request()->negara_user,
            'rt_user' => Request()->rt_user,
            'rw_user' => Request()->negara_warga,
            'rt_user' => Request()->rt_user,
            'rw_user' => Request()->rw_user,
            'updated_at' => Carbon::now()->toDateTimeString()

        ];
        $this->UserModel->editData($id_user, $data);
        return redirect()->route('user')->with('pesan', 'Data Berhasil Di Update');
    }

    public function add() {
        return view('user.v_adduser');
    }

    public function delete($id_user) {
        $this->UserModel->deleteData($id_user);
        return redirect()->route('user')->with('pesan', 'Data Berhasil Di Hapus');
    }
}
