@extends('layouts.v_template')

@section('content')
@section('title', 'User')

@if(session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Sukses!!</h4>
      {{ session('pesan') }}
    </div>
@endif

<table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>ID</th>
        <th>Nama</th>
        <th>level</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Nomor HP</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $no=1; ?>
    @foreach ($user as $data)
      <tr>
        <td>{{ $no++ }}.</td>
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->level }}</td>
        <td>{{ $data->address }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->phone }}</td>

        <td>
          <!-- Single button -->
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li>
                <a href="/user/detail/{{ $data->id }}"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="/user/edit/{{ $data->id }}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="/user/hapus/{{ $data->id }}" data-toggle="modal" data-target="#delete{{ $data->id }}">
                  <i class="glyphicon glyphicon-trash"></i> Hapus
                </a>
              </li>
             
            </ul>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <a href="/user/add" class="btn btn-success btn-md"><i class="fa fa-plus"></i> Tambah Data</a>
  <a href="/user/cetaklaporanuser" class="btn btn-danger btn-md"><i class="fa fa-download"></i> Cetak / Download Laporan User PDF</a>


  @foreach($user as $data)
  {{-- Modal Delete --}}
  <div class="modal modal-danger fade" id="delete{{ $data->id }}">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{ $data->name }}</h4>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus data ini??</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
            <a href="/user/delete/{{ $data->id }}" type="button" class="btn btn-outline">Yes</a>
          </div>
        </div>
      </div>
  </div>
  @endforeach
  
@endsection

