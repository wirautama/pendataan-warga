<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\UsersModel;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = ('id_user');
    protected $fillable = [
        'nama_user',
        'username_user',
        'password_user',
        'keterangan_user',
        'status_user',
        'desa_kelurahan_user',
        'kecamatan_user',
        'kabupaten_kota_user',
        'provinsi_user',
        'negara_user',
        'rt_user',
        'rw_user'
    ];

    public function allData()
    {
        return DB::table('user')->get();
    }

    public function detailData($id_user)
    {
        return DB::table('user')->where('id_user', $id_user)->first();
    }

    public function addData($data)
    {

        DB::table('user')->insert($data);
    }

    public function editData($id_user, $data)
    {
        DB::table('user')->where('id_user', $id_user)->update($data);
    }

    public function deleteData($id_user)
    {
        DB::table('user')->where('id_user', $id_user)->delete();
    }
}
