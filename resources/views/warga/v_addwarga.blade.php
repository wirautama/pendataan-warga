@extends('layouts.v_template')

@section('content')
@section('title', 'Tambah Warga')

<form action="/warga/insert" method="POST" enctype="multipart/form-data">
    @csrf
    <h3>A. Data Pribadi</h3>
    <table class="table table-striped table-middle">
      <tr>
        <th width="20%">NIK</th>
        <td width="1%">:</td>
        <td>
          <div class="form-group has-feedback">
            <input type="text" class="form-control @error('nik_warga') is-invalid  @enderror" placeholder="Nomor Induk Kependudukan" name="nik_warga" value="{{ old('nik_warga') }}">
              <div class="text-danger">
                @error('nik_warga')
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
            <input type="text" class="form-control @error('nama_warga') is-invalid  @enderror" placeholder="Nama Lengkap" name="nama_warga" value="{{ old('nama_warga') }}">
              <div class="text-danger">
                @error('nama_warga')
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
            <input type="text" class="form-control @error('tempat_lahir_warga') is-invalid  @enderror" placeholder="Tempat Lahir" name="tempat_lahir_warga" value="{{ old('tempat_lahir_warga') }}">
              <div class="text-danger">
                @error('tempat_lahir_warga')
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
            <input type="date" class="form-control @error('tanggal_lahir_warga') is-invalid  @enderror" placeholder="Tanggal Lahir" name="tanggal_lahir_warga" value="{{ old('tanggal_lahir_warga') }}">
              <div class="text-danger">
                @error('tanggal_lahir_warga')
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
            <select class="form-control selectpicker @error('jenis_kelamin_warga') is-invalid  @enderror" name="jenis_kelamin_warga" value="{{ old('jenis_kelamin_warga') }}">
              <option value="" selected disabled>- pilih -</option>
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
            <div class="text-danger">
              @error('jenis_kelamin_warga')
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
            <textarea name="alamat_ktp_warga" value="{{ old('alamat_ktp_warga') }}" class="form-control @error('alamat_ktp_warga') is-invalid @enderror" required placeholder="Alamat Lengkap"></textarea>
            <div class="text-danger">
              @error('alamat_ktp_warga')
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
            <textarea name="alamat_warga" value="{{ old('alamat_warga') }}" class="form-control @error('alamat_warga') is-invalid @enderror" required placeholder="Alamat Lengkap"></textarea>
            <div class="text-danger">
              @error('alamat_warga')
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
            <input type="text" class="form-control @error('desa_kelurahan_warga') is-invalid @enderror" name="desa_kelurahan_warga" value="BETRO" required>
            <div class="text-danger">
              @error('desa_kelurahan_warga')
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
            <input type="text" class="form-control @error('kecamatan_warga') is-invalid @enderror" name="kecamatan_warga" value="SEDATI" required>
            <div class="text-danger">
              @error('kecamatan_warga')
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
            <input type="text" class="form-control @error('kabupaten_kota_warga') is-invalid @enderror" name="kabupaten_kota_warga" value="SIDOARJO" required>
            <div class="text-danger">
              @error('kabupaten_kota_warga')
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
            <input type="text" class="form-control @error('provinsi_warga') is-invalid @enderror" name="provinsi_warga" value="JAWA TIMUR">
            <div class="text-danger">
              @error('provinsi_warga')
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
            <input type="text" class="form-control @error('negara_warga') is-invalid @enderror" name="negara_warga" value="INDONESIA">
            <div class="text-danger">
              @error('negara_warga')
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
            <input type="text" class="form-control @error('rt_warga') is-invalid @enderror" name="rt_warga" required>
            <div class="text-danger">
              @error('rt_warga')
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
            <input type="text" class="form-control @error('rw_warga') is-invalid @enderror" name="rw_warga" required>
            <div class="text-danger">
              @error('rw_warga')
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
            <select class="form-control selectlive @error('agama_warga') is-invalid @enderror" name="agama_warga" required>
              <option value="" selected disabled>- pilih -</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katholik">Katholik</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Konghucu">Konghucu</option>
            </select>
            <div class="text-danger">
              @error('agama_warga')
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
            <select class="form-control selectlive @error('pendidikan_terakhir_warga') is-invalid @enderror" name="pendidikan_terakhir_warga" required>
              <option value="" selected disabled>- pilih -</option>
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
            <div class="text-danger">
              @error('pendidikan_terakhir_warga')
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
            <input type="text" class="form-control @error('pekerjaan_warga') is-invalid @enderror" name="pekerjaan_warga">
              <div class="text-danger">
                @error('pekerjaan_warga')
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
            <select class="form-control selectpicker @error('status_perkawinan_warga') is-invalid @enderror" name="status_perkawinan_warga" required>
              <option value="" selected disabled>- pilih -</option>
              <option value="Kawin">Kawin</option>
              <option value="Belum Kawin">Belum Kawin</option>
            </select>
            <div class="text-danger">
              @error('status_perkawinan_warga')
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
            <select class="form-control selectpicker @error('status_warga') is-invalid @enderror" name="status_warga" required>
              <option value="" selected disabled>- Pilih -</option>
              <option value="Tetap">Tetap</option>
              <option value="Kontrak">Kontrak</option>
            </select>
            <div class="text-danger">
              @error('status_warga')
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

    <a href="/warga" class="btn btn-success btn-lg">Kembali</a>
</form>
    

@endsection
