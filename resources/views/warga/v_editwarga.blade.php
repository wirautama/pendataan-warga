@extends('layouts.v_template')

@section('content')
@section('title', 'Edit Warga')

@if(session('pesan'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4> Success!</h4>
      {{ session('pesan') }}.
    </div>
@endif


<form action="/warga/update/{{ $warga->nik_warga }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">NIK</th>
        <td width="1%">:</td>
        <td>
            <input type="text" name="nik_warga" value="{{ $warga->nik_warga }}" class="form-control @error('nik_warga') is-invalid @enderror" readonly>
            <div class="text-danger">
                @error('nik_warga')
                    {{ $message }}
                @enderror
            </div>
        </td>
      </tr>
      <tr>
        <th>Nama Warga</th>
        <td>:</td>
        <td><input type="text" name="nama_warga" value="{{ $warga->nama_warga }}" class="form-control @error('nama_warga') is-invalid @enderror"></td>
      </tr>
      <tr>
        <th>Tempat Lahir</th>
        <td>:</td>
        <td><input type="text" name="tempat_lahir_warga" value="{{ $warga->tempat_lahir_warga }}" class="form-control @error('tempat_lahir_warga') is-invalid @enderror"></td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir_warga" value="{{ $warga->tanggal_lahir_warga }}" class="form-control @error('tanggal_lahir_warga') is-invalid @enderror"></td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>:</td>
        <td>
          <select class="form-control selectpicker" name="jenis_kelamin_warga" @error('jenis_kelamin_warga') is-invalid @enderror>
            <option value="{{ $warga->jenis_kelamin_warga }}" selected>{{ $warga->jenis_kelamin_warga }}</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select>
        </td>
      </tr>
    </table>
    
    <h3>B. Data Alamat</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Alamat KTP</th>
        <td width="1%">:</td>
        <td><textarea name="alamat_ktp_warga" class="form-control @error('alamat_ktp_warga') is-invalid @enderror">{{ $warga->alamat_ktp_warga }}</textarea></td>
      </tr>
      <tr>
        <th>Alamat</th>
        <td>:</td>
        <td><textarea name="alamat_warga" class="form-control @error('alamat_warga') is-invalid @enderror">{{ $warga->alamat_warga }}"</textarea></td>
      </tr>
      <tr>
        <th>Desa/Kelurahan</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('desa_kelurahan_warga') is-invalid @enderror" name="desa_kelurahan_warga" value="BETRO" ></td>
      </tr>
      <tr>
        <th>Kecamatan</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('kecamatan_warga') is-invalid @enderror" name="kecamatan_warga" value="SEDATI" ></td>
      </tr>
      <tr>
        <th>Kabupaten/Kota</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('kabupaten_kota_warga') is-invalid @enderror" name="kabupaten_kota_warga" value="SIDOARJO" ></td>
      </tr>
      <tr>
        <th>Provinsi</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('provinsi_warga') is-invalid @enderror" name="provinsi_warga" value="JAWA TIMUR"></td>
      </tr>
      <tr>
        <th>Negara</th>
        <td>:</td>
        <td><input type="text" class="form-control @error('negara_warga') is-invalid @enderror" name="negara_warga" value="INDONESIA"></td>
      </tr>
      <tr>
        <th>RT</th>
        <td>:</td>
        <td><input type="text" value="{{ $warga->rt_warga }}" class="form-control @error('rt_warga') is-invalid @enderror" name="rt_warga" required></td>
      </tr>
      <tr>
        <th>RW</th>
        <td>:</td>
        <td><input type="text" value="{{ $warga->rw_warga }}" class="form-control @error('rw_warga') is-invalid @enderror" name="rw_warga" required></td>
      </tr>
    </table>
    
    <h3>C. Data Lain-lain</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Agama</th>
        <td width="1%">:</td>
        <td>
          <select class="form-control selectlive @error('agama_warga') is-invalid @enderror" name="agama_warga" required>
            <option value="{{ $warga->agama_warga }}" selected>{{ $warga->agama_warga }}</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katholik">Katholik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Pendidikan Terakhir</th>
        <td>:</td>
        <td>
          <select class="form-control selectlive @error('pendidikan_terakhir_warga') is-invalid @enderror" name="pendidikan_terakhir_warga" required>
            <option value="{{ $warga->pendidikan_terakhir_warga }}" selected>{{ $warga->pendidikan_terakhir_warga }}</option>
            <option value="Tidak Sekolah">Tidak Sekolah</option>
            <option value="Tidak Tamat SD">Tidak Tamat SD</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="D1">D1</option>
            <option value="D2">D2</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Pekerjaan</th>
        <td>:</td>
        <td><input type="text" value="{{ $warga->pekerjaan_warga }}" class="form-control @error('pekerjaan_warga') is-invalid @enderror" name="pekerjaan_warga"></td>
      </tr>
      <tr>
        <th>Status Perkawinan</th>
        <td>:</td>
        <td>
          <select class="form-control selectpicker @error('status_perkawinan_warga') is-invalid @enderror" name="status_perkawinan_warga" required>
            <option value="{{ $warga->status_perkawinan_warga }}" selected>{{ $warga->status_perkawinan_warga }}</option>
            <option value="Kawin">Kawin</option>
            <option value="Belum Kawin">Belum Kawin</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Status Tinggal</th>
        <td>:</td>
        <td>
          <select class="form-control selectpicker @error('status_warga') is-invalid @enderror" name="status_warga" required>
            <option value="{{ $warga->status_warga }}" selected>{{ $warga->status_warga }}</option>
            <option value="Tetap">Tetap</option>
            <option value="Kontrak">Kontrak</option>
          </select>
        </td>
      </tr>
    </table>
    
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>

    <a href="/warga" class="btn btn-success btn-lg">Kembali</a>
</form>

@endsection