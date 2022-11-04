@extends('layouts.v_template')

@section('content')
@section('title', 'Data Mutasi')

@if(session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4> Success!</h4>
      {{ session('pesan') }}.
    </div>
@endif

<table class="table table-striped table-condensed table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama Mutasi</th>
        <th>Jenis Kelamin</th>
        <th>Usia</th>
        <th>Pendidikan Terakhir</th>
        <th>Pekerjaan</th>
        <th>Status Perkawinan</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $no=1; ?>
    @foreach ($mutasi as $data)
      <tr>
        <td>{{ $no++ }}.</td>
        <td>{{ $data->nik_mutasi }}</td>
        <td>{{ $data->nama_mutasi }}</td>
        <td>{{ $data->jenis_kelamin_mutasi }}</td>
        <td></td> 
        <td>{{ $data->pendidikan_terakhir_mutasi }}</td>
        <td>{{ $data->pekerjaan_mutasi }}</td>
        <td>{{ $data->status_perkawinan_mutasi }}</td>
        <td>{{ $data->status_mutasi }}</td>
        <td>
          <!-- Single button -->
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li>
                <a href="/mutasi/detail/{{ $data->nik_mutasi }}"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
              </li>
              <li>
                <a href="cetak-show.php" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="/mutasi/hapus/{{ $data->nik_mutasi }}" data-toggle="modal" data-target="#delete{{ $data->nik_mutasi }}" >
                  <i class="glyphicon glyphicon-trash"></i> Hapus
                </a>
              </li>
             
            </ul>
          </div>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>

  <br><br>

<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Mutasi</dt>
    <dd> orang</dd>

    <dt>Jumlah Laki-laki</dt>
    <dd> orang</dd>

    <dt>Jumlah Perempuan</dt>
    <dd> orang</dd>

    <dt>Warga < 17 tahun</dt>
    <dd> orang</dd>

    <dt>Warga >= 17 tahun</dt>
    <dd> orang</dd>
  </dl>
</div>

@foreach($mutasi as $data)
{{-- Modal Delete --}}
<div class="modal modal-danger fade" id="delete{{ $data->nik_mutasi }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ $data->nama_mutasi }}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus data ini??</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/mutasi/delete/{{ $data->nik_mutasi }}" type="button" class="btn btn-outline">Yes</a>
        </div>
      </div>
    </div>
</div>
@endforeach


@endsection