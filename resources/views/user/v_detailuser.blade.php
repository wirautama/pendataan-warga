@extends('layouts.v_template')

@section('content')
@section('title', 'Detail User')

<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nama User</th>
    <td width="1%">:</td>
    <td>{{ $user->nama_user }}</td>
  </tr>
  <tr>
    <th>Username</th>
    <td>:</td>
    <td>{{ $user->username_user }}</td>
  </tr>
  <tr>
    <th>Keterangan</th>
    <td>:</td>
    <td>{{ $user->keterangan_user }}</td>
  </tr>
  <tr>
    <th>Status</th>
    <td>:</td>
    <td>{{ $user->status_user }}</td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Desa/Kelurahan</th>
    <td width="1%">:</td>
    <td>{{ $user->desa_kelurahan_user }}</td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td>{{ $user->kecamatan_user }}</td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td>{{ $user->kabupaten_kota_user }}</td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td>{{ $user->provinsi_user }}</td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td>{{ $user->negara_user }}</td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td>{{ $user->rt_user }}</td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td>{{ $user->rw_user }}</td>
  </tr>
</table>

<h3>C. Data Aplikasi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Diinput</th>
    <td width="1%">:</td>
    <td>{{ $user->created_at }}</td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td>{{ $user->updated_at }}</td>
  </tr>
</table>
<a href="/user" class="btn btn-success btn-md">Kembali</a>



@endsection