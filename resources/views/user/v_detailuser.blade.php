@extends('layouts.v_template')

@section('content')
@section('title', 'Detail User')

<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">ID</th>
    <td width="1%">:</td>
    <td>{{ $user->id }}</td>
  </tr>
  <tr>
    <th width="20%">Nama User</th>
    <td width="1%">:</td>
    <td>{{ $user->name }}</td>
  </tr>
  <tr>
    <th>Email</th>
    <td>:</td>
    <td>{{ $user->email }}</td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>:</td>
    <td>{{ $user->address }}</td>
  </tr>
  <tr>
    <th>No. Handphone</th>
    <td>:</td>
    <td>{{ $user->phone }}</td>
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