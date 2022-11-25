@extends('layouts.v_template')

@section('content')
@section('title', 'Edit User')


@if(session('pesan'))
    {{-- <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4> Success!</h4>
      {{ session('pesan') }}. --}}
      <div class="row">
        <div class="col-lg-4 col-xs-8">
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Sukses!!</h4>
            {{ session('pesan') }}
          </div>
        </div>
      </div>
    </div>
@endif


<form action="/user/update/{{ $user->id }}" method="post" enctype="multipart/form-data">
  @csrf
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Nama User</th>
        <td width="1%">:</td>
        <td><input type="text" class="form-control" name="name" value="{{ $user->name }}"  required></td>
      </tr>
      <tr>
        <th>Level</th>
        <td>:</td>
        <td>
          <select class="form-control selectpicker" name="level" required>
            <option value="{{ $user->level }}" selected>{{ $user->level }}</option>
            <option value="Admin">Admin</option>
            <option value="RT">RT</option>
            <option value="RW">RW</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Email</th>
        <td>:</td>
        <td><input type="email" class="form-control" name="email" value="{{ $user->email }}"  required></td>
      </tr>
      <tr>
      <tr>
        <th>Alamat</th>
        <td>:</td>
        <td><textarea class="form-control" name="address">{{ $user->address }}</textarea></td>
      </tr>
      <tr>
        <th>Nomor Handphone</th>
        <td>:</td>
        <td><textarea class="form-control" name="phone">{{ $user->phone }}</textarea></td>
      </tr>
        <th>Password</th>
        <td>:</td>
        <td>
          <input type="password" class="form-control glyphicon glyphicon-eye-close" id="show_hide_password" class="form-control"  value="{{ $user->password }}" name="password">
          {{-- <small>Jika dikosongkan, maka password tidak berubah</small> --}}
        </td>
      </tr>
    </table>
    

    
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>
    <a href="/user" class="btn btn-success btn-lg">Kembali</a>
    </form>
    

@endsection