@extends('layouts.v_template')

@section('content')
@section('title', 'Tambah Data Mutasi')


<form action="/mutasi/insert/{{ $warga->nik_warga }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">NIK</th>
        <td width="1%">:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" name="nik_mutasi" value="{{ $warga->nik_warga }}" class="form-control @error('nik_mutasi') is-invalid @enderror" readonly required>
            <div class="text-danger">
              @error('nik_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Nama Warga</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" name="nama_mutasi" value="{{ $warga->nama_warga }}" class="form-control @error('nama_mutasi') is-invalid @enderror" readonly required>
            <div class="text-danger">
              @error('nama_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Tempat Lahir</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" name="tempat_lahir_mutasi" value="{{ $warga->tempat_lahir_warga }}" class="form-control @error('tempat_lahir_mutasi') is-invalid @enderror" readonly required>
            <div class="text-danger">
              @error('tampat_lahir_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="date" name="tanggal_lahir_mutasi" value="{{ $warga->tanggal_lahir_warga }}" class="form-control @error('tanggal_lahir_warga') is-invalid @enderror" readonly required>
            <div class="text-danger">
              @error('tanggal_lahir_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <select class="form-control selectpicker" name="jenis_kelamin_mutasi" @error('jenis_kelamin_mutasi') is-invalid @enderror readonly required>
              <option value="{{ $warga->jenis_kelamin_warga }}" selected readonly>{{ $warga->jenis_kelamin_warga }}</option>
            </select>
            <div class="text-danger">
              @error('jenis_kelamin_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
    </table>
    
    <h3>B. Data Alamat</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Alamat KTP</th>
        <td width="1%">:</td>
        <td>
          <div class="form-group has-feedback">
            <textarea name="alamat_ktp_mutasi" class="form-control @error('alamat_ktp_mutasi') is-invalid @enderror" required>{{ $warga->alamat_ktp_warga }}</textarea>
            <div class="text-danger">
              @error('alamat_ktp_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Alamat</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <textarea name="alamat_mutasi" class="form-control @error('alamat_mutasi') is-invalid @enderror" required>{{ $warga->alamat_warga }}</textarea>
            <div class="text-danger">
              @error('alamat_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Desa/Kelurahan</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" class="form-control @error('desa_kelurahan_mutasi') is-invalid @enderror" name="desa_kelurahan_mutasi" value="{{ $warga->desa_kelurahan_warga }}" required>
            <div class="text-danger">
              @error('desa_kelurahan_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Kecamatan</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" class="form-control @error('kecamatan_mutasi') is-invalid @enderror" name="kecamatan_mutasi" value="{{ $warga->kecamatan_warga }}" required>
            <div class="text-danger">
              @error('kecamatan_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Kabupaten/Kota</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" class="form-control @error('kabupaten_kota_mutasi') is-invalid @enderror" name="kabupaten_kota_mutasi" value="{{ $warga->kabupaten_kota_warga }}" required>
            <div class="text-danger">
              @error('kabupaten_kota_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Provinsi</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" class="form-control @error('provinsi_mutasi') is-invalid @enderror" name="provinsi_mutasi" value="{{ $warga->provinsi_warga }}" required>
            <div class="text-danger">
              @error('provinsi_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Negara</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" class="form-control @error('negara_mutasi') is-invalid @enderror" name="negara_mutasi" value="{{ $warga->negara_warga }}" required>
            <div class="text-danger">
              @error('negara_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>RT</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" value="{{ $warga->rt_warga }}" class="form-control @error('rt_mutasi') is-invalid @enderror" name="rt_mutasi" required>
            <div class="text-danger">
              @error('rt_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>RW</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" value="{{ $warga->rw_warga }}" class="form-control @error('rw_mutasi') is-invalid @enderror" name="rw_mutasi" required>
            <div class="text-danger">
              @error('rw_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
    </table>
    
    <h3>C. Data Lain-lain</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">Agama</th>
        <td width="1%">:</td>
        <td>
          <div class="form-group has-feedback">
            <select class="form-control selectlive @error('agama_mutasi') is-invalid @enderror" name="agama_mutasi" required readonly>
              <option value="{{ $warga->agama_warga }}" selected>{{ $warga->agama_warga }}</option>
            </select>
            <div class="text-danger">
              @error('agama_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Pendidikan Terakhir</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <select class="form-control selectlive @error('pendidikan_terakhir_mutasi') is-invalid @enderror" name="pendidikan_terakhir_mutasi" required readonly>
              <option value="{{ $warga->pendidikan_terakhir_warga }}" selected>{{ $warga->pendidikan_terakhir_warga }}</option>
            </select>
            <div class="text-danger">
              @error('pendidikan_terakhir_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Pekerjaan</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" value="{{ $warga->pekerjaan_warga }}" class="form-control @error('pekerjaan_mutasi') is-invalid @enderror" name="pekerjaan_mutasi" readonly required>
            <div class="text-danger">
              @error('pekerjaan_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Status Perkawinan</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <select class="form-control selectpicker @error('status_perkawinan_mutasi') is-invalid @enderror" name="status_perkawinan_mutasi" required readonly>
              <option value="{{ $warga->status_perkawinan_warga }}" selected>{{ $warga->status_perkawinan_warga }}</option>
            </select>
            <div class="text-danger">
              @error('status_perkawinan_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Status Tinggal</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <select class="form-control selectpicker @error('status_mutasi') is-invalid @enderror" name="status_mutasi" required readonly>
              <option value="{{ $warga->status_warga }}" selected>{{ $warga->status_warga }}</option>
            </select>
            <div class="text-danger">
              @error('status_mutasi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
    </table>
    
    <button type="submit" class="btn btn-primary btn-lg">
      <i class="glyphicon glyphicon-floppy-save"></i> Simpan
    </button>

    <a href="/mutasi" class="btn btn-success btn-lg">Kembali</a>
</form>

@endsection