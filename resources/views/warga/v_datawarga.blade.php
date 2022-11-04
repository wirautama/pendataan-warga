@extends('layouts.v_template')

@section('content')
@section('title', 'Data Warga')

@if(session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4> Success! {{ session('pesan') }}. <i class="glyphicon glyphicon-ok"></i></h4>
    </div>
@endif

    <table class="table table-bordered">
        <thead>
          <tr>
            <th>No.</th>
            <th>NIK</th>
            <th>Nama Warga</th>
            <th>Jenis Kelamin</th>
            <th>Lahir</th>
            <th>Usia</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
            <th>Kawin</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach($warga as $data)
          <tr>
            <td>{{ $no++ }}.</td>
            <td>{{ $data->nik_warga }}</td>
            <td>{{ $data->nama_warga }}</td>
            <td>{{ $data->jenis_kelamin_warga }}</td>
            <td>{{ $data->tanggal_lahir_warga }}</td> 
            <td></td>
            <td>{{ $data->pendidikan_terakhir_warga }}</td>
            <td>{{ $data->pekerjaan_warga }}</td>
            <td>{{ $data->status_perkawinan_warga }}</td>
            <td>{{ $data->status_warga }}</td>
            <td>
              <!-- Single button -->
              <div class="btn-group pull-right">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li>
                    <a href="/warga/detail/{{ $data->nik_warga }}"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
                  </li>
                  <li>
                    <a href="cetak-show.php" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak</a>
                  </li>
                  
                  <li class="divider"></li>
                  <li>
                    <a href="/warga/edit/{{ $data->nik_warga }}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                  </li>
                  <li>
                    <a href="../mutasi/create.php"><i class="glyphicon glyphicon-export"></i> Mutasi</a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="/warga/hapus/{{ $data->nik_warga }}" data-toggle="modal" data-target="#delete{{ $data->nik_warga }}">
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
      <a href="/warga/add" class="btn btn-primary btn-md">Tambah Data</a><br>

      <br><br>

<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Warga</dt>
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

@foreach($warga as $data)
{{-- Modal Delete --}}
<div class="modal modal-danger fade" id="delete{{ $data->nik_warga }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ $data->nama_warga }}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus data ini??</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/warga/delete/{{ $data->nik_warga }}" type="button" class="btn btn-outline">Yes</a>
        </div>
      </div>
    </div>
</div>
@endforeach
      
      
@endsection