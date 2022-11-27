@extends('layouts.v_template')

@section('content')
@section('title', 'Data Kartu Keluarga')

<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Nomor Kartu Keluarga</th>
    <td width="1%">:</td>
    <td name="nomor_keluarga">{{ $kartu_keluarga->nomor_keluarga }}</td>
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
@if(session('pesan'))
  <div class="row">
    <div class="col-lg-12 col-xs-6">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
        {{ session('pesan') }}!!
      </div>
    </div>
  </div>
@endif

<h3>Daftar Nama Warga</h3>
<form action="/kartukeluarga/insertAnggota/{{$kartu_keluarga->nomor_keluarga}}" method="post">
  @csrf
  <table id="example1" class="table table-bordered table-striped">
    <tr>
      <th width="20%">Nama Warga</th>
      <td width="1%">:</td>
      <td>
        <select class="form-control selectlive" name="nik_warga" required>
          <option value="" selected disabled>- Pilih Warga -</option>
          @foreach ($data_warga as $warga)
          <option value="{{ $warga->nik_warga }}">
            {{ $warga->nama_warga }} (NIK: {{ $warga->nik_warga }})
          </option>
          @endforeach
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <button type="submit" class="btn btn-primary btn-lg" onclick="return confirm('Apakah anda yakin ingin menambahkan anggota ini?')">
          <i class="glyphicon glyphicon-plus"></i> Tambahkan
        </button>      
      </td>
    </tr>
  </table>
</form>
@if(session('hapus'))
  <div class="row">
    <div class="col-lg-12 col-xs-6">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
        {{ session('hapus') }}!!
      </div>
    </div>
  </div>
@endif

@if(session('ada'))
  <div class="row">
    <div class="col-lg-12 col-xs-6">
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Gagal!</h4>
        {{ session('ada') }}!!
      </div>
    </div>
  </div>
@endif

  
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>NIK</th>
        <th>Nama Warga</th>
        <th>Jenis Kelamin</th>
        <th>Lahir</th>
        {{-- <th>Usia</th> --}}
        <th>Pendidikan</th>
        <th>Pekerjaan</th>
        <th>Kawin</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php $no=1; ?>
        @foreach($anggota_keluarga as $anggota)
        <td>{{ $no++ }}.</td>
        <td>{{ $anggota->nik_warga }}</td>
        <td>{{ $anggota->nama_warga }}</td>
        <td>{{ $anggota->jenis_kelamin_warga }}</td>
        <td>{{ $anggota->tanggal_lahir_warga }}</td> 
        {{-- <td></td> --}}
        <td>{{ $anggota->pendidikan_terakhir_warga }}</td>
        <td>{{ $anggota->pekerjaan_warga }}</td>
        <td>{{ $anggota->status_perkawinan_warga }}</td>
        <td>{{ $anggota->status_warga }}</td>
        <td>
          <!-- Single button -->
          <div class="btn-group pull-right">
            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
              <li>
                <a href="/warga/detail/{{ $anggota->nik_warga }}"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
              </li>  
              <li class="divider"></li>
              <li>
                <a href="/kartukeluarga/editAnggota/hapusAnggota/{{ $anggota->nik_warga }}/{{$anggota->nomor_keluarga}}" data-toggle="modal" data-target="#delete{{ $anggota->nik_warga }}/{{$anggota->nomor_keluarga}}" onclick="return confirm('Apakah anda yakin ingin menghapus anggota ini?')">
                  <i class="glyphicon glyphicon-trash"></i> Hapus dari anggota
                </a>
              </li>
            </ul>
          </div>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</form>

<br><br>
<a href="/kartukeluarga" class="btn btn-primary btn-lg"> Kembali</a>

@foreach($anggota_keluarga as $anggota)
{{-- Modal Delete --}}
<div class="modal modal-danger fade" id="delete{{ $anggota->nik_warga }}/{{ $anggota->nomor_keluarga }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{ $anggota->nama_warga }} dari Keluarga {{$anggota->nama_warga}}</h4>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin ingin menghapus data ini??</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
          <a href="/kartukeluarga/editAnggota/hapusAnggota{{ $anggota->nik_warga }}/{{ $anggota->nomor_keluarga }}" type="button" class="btn btn-outline">Yes</a>
        </div>
      </div>
    </div>
</div>
@endforeach


    

@endsection