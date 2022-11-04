@extends('layouts.v_template')

@section('content')
@section('title', 'Detail Warga')

<h3>A. Data Pribadi</h3>

<table class="table table-striped">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td>{{ $warga->nik_warga }}</td>
  </tr>
  <tr>
    <th>Nama Warga</th>
    <td>:</td>
    <td>{{ $warga->nama_warga }}</td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td>{{ $warga->tempat_lahir_warga }}</td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td>
        {{ $warga->tanggal_lahir_warga }}
    </td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>{{ $warga->jenis_kelamin_warga }}</td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Alamat KTP</th>
    <td width="1%">:</td>
    <td>{{ $warga->alamat_ktp_warga }}</td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td>{{ $warga->alamat_warga }}</td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td>{{ $warga->desa_kelurahan_warga }}</td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td>{{ $warga->kecamatan_warga }}</td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td>{{ $warga->kabupaten_kota_warga }}</td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td>{{ $warga->provinsi_warga }}</td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td>{{ $warga->negara_warga }}</td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td>{{ $warga->rt_warga }}</td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td>{{ $warga->rw_warga }}</td>
  </tr>
</table>

<h3>C. Data Lain-lain</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
    <td>{{ $warga->agama_warga }}</td>
  </tr>
  <tr>
    <th>Pendidikan</th>
    <td>:</td>
    <td>{{ $warga->pendidikan_terakhir_warga }}</td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td>{{ $warga->pekerjaan_warga }}</td>
  </tr>
  <tr>
    <th>Status Perkawinan</th>
    <td>:</td>
    <td>{{ $warga->status_perkawinan_warga }}</td>
  </tr>
  <tr>
    <th>Status Tinggal</th>
    <td>:</td>
    <td>{{ $warga->status_warga }}</td>
  </tr>
</table>

<h3>D. Data Aplikasi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Diinput oleh</th>
    <td width="1%">:</td>
    <td>{{ $warga->id_user }}</td>
  </tr>
  <tr>
    <th>Diinput</th>
    <td>:</td>
    <td>{{ $warga->created_at }}</td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td>{{ $warga->updated_at }}</td>
  </tr>
  <tr>
    <th>
        <a href="/warga" class="btn btn-success btn-large">Kembali</a>
    </th>
</tr>

</table>


@endsection