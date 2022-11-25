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
        <td><input type="text" value="" name="name" placeholder="Nama Lengkap" class="form-control" required></td>
      </tr>
      <tr>
        <th>Level</th>
        <td>:</td>
        <td>
          <select class="form-control selectpicker" name="level" required>
            <option value="" selected>-Pilih-</option>
            <option value="Admin">Admin</option>
            <option value="RT">RT</option>
            <option value="RW">RW</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Email</th>
        <td>:</td>
        <td><input type="email" value="" name="email" placeholder="example@email.com" class="form-control" required></td>
      </tr>
      <tr>
        <th>Alamat</th>
        <td>:</td>
        <td><textarea name="address" value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror" placeholder="Alamat Lengkap"></textarea></td>
      </tr>
      <tr>
        <th>No. Handphone</th>
        <td>:</td>
        <td><input type="number" value="" name="phone" placeholder="Nomor HP" class="form-control @error('address') is-invalid @enderror"></td>
      </tr>
      <tr>
        <th>Password</th>
        <td>:</td>
        <td><input type="password" value="" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror"></td>
      </tr>
    </table>
    
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>

    <a href="/user" class="btn btn-success btn-lg">Kembali</a>
    </form>
@endsection
