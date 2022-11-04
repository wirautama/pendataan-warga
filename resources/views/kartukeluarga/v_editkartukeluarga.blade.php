@extends('layouts.v_template')

@section('content')
@section('title', 'Edit Kartu Keluarga')

<form action="update.php" method="post">
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Nomor Kartu Keluarga</th>
        <td width="1%">:</td>
        <td><input type="text" class="form-control" name="nomor_keluarga" value="{{ $kartu_keluarga->nomor_keluarga }}"></td>
      </tr>
      <tr>
        <th>Kepala Keluarga</th>
        <td>:</td>
        <td>
          <select class="form-control selectlive" name="nik_kepala_keluarga" required>
            <option value="" selected></option>
            {{-- <?php foreach ($data_warga as $warga) : ?> --}}
            {{-- <option value="<?php echo $warga['nomor_keluarga'] ?>"> --}}
              {{-- <?php echo $warga['nama_warga'] ?> (NIK: <?php echo $warga['nik_warga'] ?>) --}}
            </option>
            {{-- <?php endforeach ?> --}}
          </select>
        </td>
      </tr>
    </table>
    
    <h3>B. Data Alamat</h3>
    <table class="table table-striped">
      <tr>
        <th width="20%">Alamat</th>
        <td width="1%">:</td>
        <td><input type="text" class="form-control" name="alamat_keluarga" value="{{ $kartu_keluarga->alamat_keluarga }}"></td>
      </tr>
      <tr>
        <th>RT</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="rt_keluarga" value="{{ $kartu_keluarga->rt_keluarga }}"></td>
      </tr>
      <tr>
        <th>RW</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="rw_keluarga" value="{{ $kartu_keluarga->rw_keluarga }}"></td>
      </tr>
      <tr>
        <th>Desa/Kelurahan</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="desa_kelurahan_keluarga" value="{{ $kartu_keluarga->desa_kelurahan_keluarga }}"></td>
      </tr>
      <tr>
        <th>Kecamatan</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="kecamatan_keluarga" value="{{ $kartu_keluarga->kecamatan_keluarga }}"></td>
      </tr>
      <tr>
        <th>Kabupaten/Kota</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="kabupaten_kota_keluarga" value="{{ $kartu_keluarga->kabupaten_kota_keluarga }}"></td>
      </tr>
      <tr>
        <th>Provinsi</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="provinsi_keluarga" value="{{ $kartu_keluarga->provinsi_keluarga }}"></td>
      </tr>
      <tr>
        <th>Negara</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="negara_keluarga" value="{{ $kartu_keluarga->negara_keluarga }}"></td>
      </tr>
      <tr>
        <th>Kode Pos</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="kode_pos_keluarga" value="{{ $kartu_keluarga->kode_pos_keluarga }}"></td>
      </tr>
    </table>
    
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>
    <a href="/kartukeluarga" class="btn btn-success btn-lg">Kembali</a>
    
    <input type="hidden" name="nomor_keluarga" value="">
    </form>
    

@endsection