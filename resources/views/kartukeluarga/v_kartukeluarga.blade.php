@extends('layouts.v_template')

@section('content')
@section('title', 'Kartu Keluarga')
<table class="table table-striped table-condensed table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nomor KK</th>
        <th>Kepala Keluarga</th>
        <th>NIK Kepala Keluarga</th>
        <th>Jml. Anggota</th>
        <th>Alamat</th>
        <th>RT</th>
        <th>RW</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php $no=1; ?>
    @foreach ($kartu_keluarga as $data)
      <tr>
        <td>{{ $no++ }}.</td>
        <td>{{ $data->nomor_keluarga }}</td>
        <td>{{ $data->nama_warga }}</td>
        <td>{{ $data->nik_kepala_keluarga }}</td>
        <td></td> 
        <td>{{ $data->alamat_keluarga }}</td>
        <td>{{ $data->rt_keluarga }}</td>
        <td>{{ $data->rw_keluarga }}</td>
        <td>
          <!-- Single button -->
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li>
                <a href="/kartukeluarga/detail/{{ $data->nomor_keluarga }}"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
              </li>
              <li>
                <a href="cetak-show.php" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak</a>
              </li>
              
              <li class="divider"></li>
              <li>
                <a href="edit.php"><i class="glyphicon glyphicon-list"></i> Ubah Anggota</a>
              </li>
              <li>
                <a href="/kartukeluarga/edit/{{ $data->nomor_keluarga }}"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="delete.php" onclick="return confirm('Yakin hapus data ini?')">
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
  <a href="/kartukeluarga/add" class="btn btn-primary btn-md">Tambah Data</a>
  
  <br><br>
        <div class="well">
            <dl class="dl-horizontal">
            <dt>Total Kartu Keluarga</dt>
            <dd> keluarga</dd>
            </dl>
        </div>
@endsection


  