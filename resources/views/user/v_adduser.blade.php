@extends('layouts.v_template')

@section('content')
@section('title', 'Tambah User')
<form action="/user/insert" method="POST" enctype="multipart/form-data">
  @csrf
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped table-middle">
      <tr> 
        <th width="20%">Nama User</th>
        <td width="1%">:</td>
        <td><input type="text" class="form-control @error('nama_user') is-invalid @enderror" value="{{ old('nama_user') }}" name="nama_user" required></td>
      </tr>
      <tr>
        <th>Username</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('username_user') is-invalid @enderror" value="{{ old('username_warga') }}" name="username_user" required></td>
      </tr>
      <tr>
        <th>Password</th>
        <td>:</td>
        <td><input type="password" class="form-control @error('password_user') is-invalid @enderror" value="{{ old('password_user') }}" name="password_user" required></td>
      </tr>
      <tr>
        <th>Keterangan</th>
        <td>:</td>
        <td><textarea class="form-control @error('keterangan_user') is-invalid @enderror" value="{{ old('keterangan_user') }}" name="keterangan_user"></textarea></td>
      </tr>
      <tr>
        <th>Status</th>
        <td>:</td>
        <td>
          <select class="form-control selectpicker @error('status_user') is-invalid @enderror" name="status_user"  required>
            <option value="{{ old('status_user') }}" selected disabled>- pilih -{{ old('status_user') }}</option>
            <option value="Admin">Admin</option>
            <option value="RT">RT</option>
            <option value="RW">RW</option>
          </select>
        </td>
      </tr>
    </table>
    
    <h3>B. Data Alamat</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Desa/Kelurahan</th>
        <td width="1%">:</td>
        <td><input type="text" class="form-control @error('desa_kelurahan_user') is-invalid @enderror" name="desa_kelurahan_user"  value="BETRO" required readonly></td>
      </tr>
      <tr>
        <th>Kecamatan</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('kecamatan_warga') is-invalid @enderror" name="kecamatan_user" value="SEDATI" required readonly></td>
      </tr>
      <tr>
        <th>Kabupaten/Kota</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('kabupaten_kota_user') is-invalid @enderror" name="kabupaten_kota_user" value="SIDOARJO" required readonly></td>
      </tr>
      <tr>
        <th>Provinsi</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('provinsi_user') is-invalid @enderror" name="provinsi_user" value="JAWA TIMUR" required readonly></td>
      </tr>
      <tr>
        <th>Negara</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('negara_user') is-invalid @enderror" name="negara_user" value="{{ old('negara_warga') }}" required></td>
      </tr>
      <tr>
        <th>RT</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('rt_user') is-invalid @enderror" name="rt_user" value="{{ old('rt_warga') }}" required></td>
      </tr>
      <tr>
        <th>RW</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('rw_user') is-invalid @enderror" name="rw_user" value="{{ old('rw_user') }}"  required></td>
      </tr>
    </table>
    
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>

    <a href="/user" class="btn btn-success btn-lg">Kembali</a>
    </form>
@endsection
