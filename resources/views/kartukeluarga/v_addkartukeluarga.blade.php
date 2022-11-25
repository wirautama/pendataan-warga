@extends('layouts.v_template')

@section('content')
@section('title', 'Tambah Kartu Keluarga')

<form action="/kartukeluarga/insert/" method="post" enctype="multipart/form-data">
  @csrf
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped table-middle">
      <tr>
        <div class="form-group has-feedback">
          <th width="20%">Nomor Kartu Keluarga</th>
          <td width="1%">:</td>
          <td>
            <div class="form-group has-feedback">
              <input type="number" class="form-control @error('nomor_keluarga') is-invalid @enderror" name="nomor_keluarga" value="{{ old('nomor_keluarga') }}" required>
              <div class="text-danger">
                @error('nomor_keluarga')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
            </div>
          </td>
        </div>
      </tr>
      <tr>
        <th>NIK Kepala Keluarga</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <select class="form-control selectlive @error('nik_kepala_keluarga') is-invalid @enderror" value="{{ old('nik_kepala_keluarga') }}" name="nik_kepala_keluarga" required>
              <option value="" selected disabled>- pilih -</option>
              @foreach ($warga as $data)
              <option value="{{ $data->nik_warga }}">
                {{ $data->nama_warga }} (NIK: {{ $data->nik_warga }})
              </option>
              @endforeach
            </select>
            <div class="text-danger">
              @error('nik_kepala_keluarga')
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
        <div class="form-group has-feedback">
        <th width="20%">Alamat</th>
        <td width="1%">:</td>
        <td>
          <div class="form-group has-feedback">
            <textarea class="form-control @error('alamat_keluarga') is-invalid @enderror" value="{{ old('alamat_keluarga') }}" name="alamat_keluarga"></textarea>
          </div>
          <div class="text-danger">
              @error('alamat_keluarga')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
          </div>
        </td>
      </tr>
      <tr>
        <th>Desa/Kelurahan</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" class="form-control @error('desa_kelurahan_keluarga') is-invalid @enderror" name="desa_kelurahan_keluarga" value="BETRO" readonly required>
              <div class="text-danger">
                @error('desa_kelurahan_keluarga')
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
            <input type="text" class="form-control @error('kecamatan_keluarga') is-invalid @enderror" name="kecamatan_keluarga" value="SEDATI" readonly required>
            <div class="text-danger">
              @error('kecamatan_keluarga')
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
            <input type="text" class="form-control @error('kabupaten_kota_keluarga') is-invalid @enderror"  name="kabupaten_kota_keluarga" value="SIDOARJO" readonly required>
            <div class="text-danger">
              @error('kabupaten_kota_keluarga')
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
            <input type="text" class="form-control @error('provinsi_keluarga') is-invalid @enderror" name="provinsi_keluarga" value="JAWA TIMUR" readonly required>
            <div class="text-danger">
              @error('provinsi_keluarga')
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
            <input type="text" class="form-control @error('negara_keluarga') is-invalid @enderror" value="{{ old('negara_keluarga') }}" name="negara_keluarga" value="INDONESIA" required>
            <div class="text-danger">
            @error('negara_keluarga')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </td>
      </tr>
      <tr>
        <th>RT</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" class="form-control @error('rt_keluarga') is-invalid @enderror" value="{{ old('rt_keluarga') }}" name="rt_keluarga" required>
            <div class="text-danger">
              @error('rt_keluarga')
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
            <input type="text" class="form-control @error('rw_keluarga') is-invalid @enderror" value="{{ old('rw_keluarga') }}" name="rw_keluarga" required>
            <div class="text-danger">
              @error('rw_keluarga')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <th>Kode Pos</th>
        <td>:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" class="form-control @error('kode_pos_keluarga') is-invalid @enderror"  name="kode_pos_keluarga" value="61753" readonly required>
            <div class="text-danger">
              @error('kode_pos_keluarga')
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

    <a href="/kartukeluarga" class="btn btn-success btn-lg">Kembali</a>
    </form>
    

@endsection