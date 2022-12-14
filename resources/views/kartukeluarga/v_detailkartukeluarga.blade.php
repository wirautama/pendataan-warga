@extends('layouts.v_template')

@section('content')
@section('title', 'Detail Kartu Keluarga')

<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td>{{ $kartu_keluarga->nomor_keluarga }}</td>
  </tr>
  <tr>
    <th>Kepala Keluarga</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->nama_warga }}</td>
  </tr>
  <tr>
    <th>NIK Kepala Keluarga</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->nik_kepala_keluarga }}</td>
  </tr>
  <tr>
    <th>Jumlah Anggota Keluarga</th>
    <td>:</td>
    <td>{{ $hitung_anggota }} orang</td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Alamat</th>
    <td width="1%">:</td>
    <td>{{ $kartu_keluarga->alamat_keluarga }}</td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->rt_keluarga }}</td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->rw_keluarga }}</td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->desa_kelurahan_keluarga }}</td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->kecamatan_keluarga }}</td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->kabupaten_kota_keluarga }}</td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->provinsi_keluarga }}</td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->negara_keluarga }}</td>
  </tr>
  <tr>
    <th>Kode Pos</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->kode_pos_keluarga }}</td>
  </tr>
</table>

<h3>C. Data Aplikasi</h3>
<table class="table table-striped">
  <tr>
    <th width="20%">Diinput oleh</th>
    <td width="1%">:</td>
    <td>{{ $kartu_keluarga->id_user }}</td>
  </tr>
  <tr>
    <th>Diinput</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->created_at }}</td>
  </tr>
  <tr>
    <th>Diperbaharui</th>
    <td>:</td>
    <td>{{ $kartu_keluarga->updated_at }}</td>
  </tr>
</table>

<h3>D. Data Anggota Kartu Keluarga</h3>
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No.</th>
      <th>NIK</th>
      <th>Nama Warga</th>
      <th>Tempat Lahir</th>
      <th>Lahir</th>
      <th>Pendidikan</th>
      <th>Pekerjaan</th>
      <th>Kawin</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    @foreach($anggota_keluarga as $anggota)
    <tr>
      <td>{{ $nomor++ }} .</td>
      <td>{{ $anggota->nik_warga }}</td>
      <td>{{ $anggota->nama_warga }}</td>
      <td>{{ $anggota->tempat_lahir_warga }}</td>
      <td>{{$anggota->tempat_lahir_warga }}</td>
      <td>{{ $anggota->pendidikan_terakhir_warga }}</td>
      <td>{{ $anggota->pekerjaan_warga }}</td>
      <td>{{ $anggota->status_perkawinan_warga }}</td>
      <td>{{ $anggota->status_warga }}</td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="">
                <span class="glyphicon glyphicon-sunglasses"></span> Detail
              </a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
<a href="/kartukeluarga" class="btn btn-success btn-lg">Kembali</a>

@endsection