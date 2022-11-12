@extends('layouts.v_template')

@section('content')
@section('title', 'Data Kartu Keluarga')
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
</table>

<h3>Daftar Nama Warga</h3>
<form action="update-anggota.php" method="post">
  <table class="table table-striped table-middle">
    <tr>
      <th width="20%">Nama Warga</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="nik_warga" required>
          <option value="" selected disabled>- pilih -</option>
          {{-- <?php foreach ($data_warga as $warga) : ?>
          <option value="<?php echo $warga['nik_warga'] ?>">
            <?php echo $warga['nama_warga'] ?> (NIK: <?php echo $warga['nik_warga'] ?>)
          </option>
          <?php endforeach ?> --}}
        </select>
      </td>
    </tr>
  </table>

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

      <tr>
        <td>{{ $no++ }}.</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td> 
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <!-- Single button -->
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li>
                <a href="/warga/detail/"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
              </li>
              <li>
                <a href="/warga/hapus/" data-toggle="modal" data-target="#delete">
                  <i class="glyphicon glyphicon-trash"></i> Hapus Anggota
                </a>
              </li>
             
            </ul>
          </div>
        </td>
      </tr>
      
    </tbody>
  </table>

  {{-- <input type="hidden" name="nomor_keluarga" value="<?php echo $get_nomor_keluarga ?>"> --}}

  <button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('Apakah anda yakin ingin menambahkan anggota ini?')">
    <i class="glyphicon glyphicon-plus"></i> Tambahkan
  </button>
</form>

<br><br>



    

@endsection