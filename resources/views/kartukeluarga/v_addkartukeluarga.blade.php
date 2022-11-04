@extends('layouts.v_template')

@section('content')
@section('title', 'Tambah Kartu Keluarga')

<form action="store.php" method="post">
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Nomor Kartu Keluarga</th>
        <td width="1%">:</td>
        <td><input type="number" class="form-control" name="nomor_keluarga" required></td>
      </tr>
      <tr>
        <th>NIK Kepala Keluarga</th>
        <td>:</td>
        <td>
          <select class="form-control selectlive" name="nik_kepala_keluarga" required>
            <option value="" selected disabled>- pilih -</option>
             @foreach ($warga as $data)
            <option value="{{ $data->nik_warga }}">
              {{ $data->nama_warga }} (NIK: {{ $data->nik_warga }})
            </option>
            @endforeach
          </select>
        </td>
      </tr>
    </table>
    
    <h3>B. Data Alamat</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Alamat</th>
        <td width="1%">:</td>
        <td><textarea class="form-control" name="alamat_keluarga"></textarea></td>
      </tr>
      <tr>
        <th>Desa/Kelurahan</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="desa_kelurahan_keluarga" value="BETRO" readonly required></td>
      </tr>
      <tr>
        <th>Kecamatan</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="kecamatan_keluarga" value="SEDATI" readonly required></td>
      </tr>
      <tr>
        <th>Kabupaten/Kota</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="kabupaten_kota_keluarga" value="SIDOARJO" readonly required></td>
      </tr>
      <tr>
        <th>Provinsi</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="provinsi_keluarga" value="JAWA TIMUR" readonly required></td>
      </tr>
      <tr>
        <th>Negara</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="negara_keluarga" value="" required></td>
      </tr>
      <tr>
        <th>RT</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="rt_keluarga" required></td>
      </tr>
      <tr>
        <th>RW</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="rw_keluarga" required></td>
      </tr>
      <tr>
        <th>Kode Pos</th>
        <td>:</td>
        <td><input type="text" class="form-control" name="kode_pos_keluarga" value="61253" readonly required></td>
      </tr>
    </table>
    
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>
    </form>
    

@endsection