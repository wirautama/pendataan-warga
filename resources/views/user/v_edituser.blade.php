@extends('layouts.v_template')

@section('content')
@section('title', 'Edit User')


@if(session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4> Success!</h4>
      {{ session('pesan') }}.
    </div>
@endif


<form action="/user/update/{{ $user->id_user }}" method="post" enctype="multipart/form-data">
  @csrf
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Nama User</th>
        <td width="1%">:</td>
        <td><input type="text" class="form-control" name="nama_user" value="{{ $user->nama_user }}"  required></td>
      </tr>
      <tr>
        <th>Username</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="username_user" value="{{ $user->username_user }}"  required></td>
      </tr>
      <tr>
        <th>Password</th>
        <td>:</td>
        <td>
          <input type="password" class="form-control glyphicon glyphicon-eye-close" id="show_hide_password" class="form-control"  value="{{ $user->password_user }}" name="password_user">
          {{-- <small>Jika dikosongkan, maka password tidak berubah</small> --}}
        </td>
      </tr>
      <tr>
        <th>Keterangan</th>
        <td>:</td>
        <td><textarea class="form-control" name="keterangan_user">{{ $user->keterangan_user }}</textarea></td>
      </tr>
      <tr>
        <th>Status</th>
        <td>:</td>
        <td>
          <select class="form-control selectpicker" name="status_user" required>
            <option value="{{ $user->status_user }}" selected>{{ $user->status_user }}</option>
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
        <td><input type="text" class="form-control" name="desa_kelurahan_user" value="{{ $user->desa_kelurahan_user }}" required></td>
      </tr>
      <tr>
        <th>Kecamatan</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="kecamatan_user" value="{{ $user->kecamatan_user }}"  required></td>
      </tr>
      <tr>
        <th>Kabupaten/Kota</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="kabupaten_kota_user" value="{{ $user->kabupaten_kota_user }}"  required></td>
      </tr>
      <tr>
        <th>Provinsi</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="provinsi_user" value="{{ $user->provinsi_user }}"  required></td>
      </tr>
      <tr>
        <th>Negara</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="negara_user" value="{{ $user->negara_user }}"  required></td>
      </tr>
      <tr>
        <th>RT</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="rt_user" value="{{ $user->rt_user }}"  required readonly></td>
      </tr>
      <tr>
        <th>RW</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="rw_user" value="{{ $user->rw_user }}"  required readonly></td>
      </tr>
    </table>
    
    <input type="hidden" name="id_user" value="">
    
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>
    <a href="/user" class="btn btn-success btn-lg">Kembali</a>
    </form>
    

@endsection