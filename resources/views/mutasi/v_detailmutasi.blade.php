@extends('layouts.v_template')

@section('content')
@section('title', 'Detail Mutasi')

<h3>A. Data Pribadi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td>{{ $mutasi->nik_mutasi }}</td>
  </tr>
  <tr>
    <th>Nama Mutasi</th>
    <td>:</td>
    <td>{{ $mutasi->nama_mutasi }}</td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td>{{ $mutasi->tempat_lahir_mutasi }}</td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td>{{ $mutasi->tanggal_lahir_mutasi }}</td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>{{ $mutasi->jenis_kelamin_mutasi }}</td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Alamat KTP</th>
    <td width="1%">:</td>
    <td>{{ $mutasi->alamat_ktp_mutasi }}</td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td>{{ $mutasi->alamat_mutasi }}</td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td>{{ $mutasi->desa_kelurahan_mutasi }}</td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td>{{ $mutasi->kecamatan_mutasi }}</td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td>{{ $mutasi->kabupaten_kota_mutasi }}</td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td>{{ $mutasi->provinsi_mutasi }}</td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td>{{ $mutasi->negara_mutasi }}</td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td>{{ $mutasi->rt_mutasi }}</td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td>{{ $mutasi->rw_mutasi }}</td>
  </tr>
</table>

<h3>C. Data Lain-lain</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
    <td>{{ $mutasi->agama_mutasi }}</td>
  </tr>
  <tr>
    <th>Pendidikan</th>
    <td>:</td>
    <td>{{ $mutasi->pendidikan_terakhir_mutasi }}</td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td>{{ $mutasi->pekerjaan_mutasi }}</td>
  </tr>
  <tr>
    <th>Status Perkawinan</th>
    <td>:</td>
    <td>{{ $mutasi->status_perkawinan_mutasi }}</td>
  </tr>
  <tr>
    <th>Status Tinggal</th>
    <td>:</td>
    <td>{{ $mutasi->status_mutasi }}</td>
  </tr>
</table>

<h3>D. Data Aplikasi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Diinput oleh</th>
    <td width="1%">:</td>
    <td>{{ $mutasi->id_user }}</td>
  </tr>
  <tr>
    <th>Diinput</th>
    <td>:</td>
    <td>{{ $mutasi->created_at }}</td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td>{{ $mutasi->updated_at }}</td>
  </tr>
</table>

<a href="/mutasi" class="btn btn-success btn-lg">Kembali</a>


@endsection