@extends('layouts.v_template')
@section('content')
@section('title', 'Cetak Kartu Keluarga')
    <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Catatan:</h4>
        Halaman ini telah disempurnakan untuk dicetak. Klik tombol cetak di bagian bawah.
      </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Pendataan Warga.
            <small class="pull-right">Tanggal: {{ date('d-M-Y') }}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>{{ auth()->user()->level }}</strong><br>
            {{ auth()->user()->name }}<br>
            {{ auth()->user()->address }}<br>
            {{ auth()->user()->phone }} <br>
            {{ auth()->user()->email }}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            {{ $kartu_keluarga->nomor_keluarga }}<br>
            <strong>{{ $kartu_keluarga->nama_warga }}</strong><br>
            {{ $kartu_keluarga->alamat_keluarga }}<br>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>ID User : {{ $kartu_keluarga->id_user }}</b><br>
          <br>
          <b>Created :</b>{{ $kartu_keluarga->created_at }} <br>
          <b>Updated :</b> {{ $kartu_keluarga->updated_at }}<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-lg-12 table-responsive">
            <h3>A. Data Pribadi</h3>
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
              <tr>
                <th>Jumlah Anggota Keluarga</th>
                <td>:</td>
                <td>{{ $hitung_anggota }} orang</td>
              </tr>
            </table>
            
            <h3>B. Data Alamat</h3>
            <table class="table table-striped">
              <tr>
                <th width="20%">Alamat</th>
                <td width="1%">:</td>
                <td>{{ $kartu_keluarga->alamat_keluarga }}</td>
              </tr>
              <tr>
                <th>RT</th>
                <td>:</td>
                <td>{{ $kartu_keluarga->rt_keluarga }}</td>
              </tr>
              <tr>
                <th>RW</th>
                <td>:</td>
                <td>{{ $kartu_keluarga->rw_keluarga }}</td>
              </tr>
              <tr>
                <th>Desa/Kelurahan</th>
                <td>:</td>
                <td>{{ $kartu_keluarga->desa_kelurahan_keluarga }}</td>
              </tr>
              <tr>
                <th>Kecamatan</th>
                <td>:</td>
                <td>{{ $kartu_keluarga->kecamatan_keluarga }}</td>
              </tr>
              <tr>
                <th>Kabupaten/Kota</th>
                <td>:</td>
                <td>{{ $kartu_keluarga->kabupaten_kota_keluarga }}</td>
              </tr>
              <tr>
                <th>Provinsi</th>
                <td>:</td>
                <td>{{ $kartu_keluarga->provinsi_keluarga }}</td>
              </tr>
              <tr>
                <th>Negara</th>
                <td>:</td>
                <td>{{ $kartu_keluarga->negara_keluarga }}</td>
              </tr>
              <tr>
                <th>Kode Pos</th>
                <td>:</td>
                <td>{{ $kartu_keluarga->kode_pos_keluarga }}</td>
              </tr>
            </table>
            
            <h3>D. Data Anggota Kartu Keluarga</h3>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama Warga</th>
                  <th>Tempat Lahir</th>
                  <th>Lahir</th>
                  <th>Pendidikan</th>
                  <th>Pekerjaan</th>
                  <th>Kawin</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php $nomor = 1; ?>
                @foreach($anggota_keluarga as $anggota)
                <tr>
                  <td>{{ $nomor++ }} .</td>
                  <td>{{ $anggota->nik_warga }}</td>
                  <td>{{ $anggota->nama_warga }}</td>
                  <td>{{ $anggota->tempat_lahir_warga }}</td>
                  <td>{{$anggota->tempat_lahir_warga }}</td>
                  <td>{{ $anggota->pendidikan_terakhir_warga }}</td>
                  <td>{{ $anggota->pekerjaan_warga }}</td>
                  <td>{{ $anggota->status_perkawinan_warga }}</td>
                  <td>{{ $anggota->status_warga }}</td>
                </tr>
              </tbody>
              @endforeach
            </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <br>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="/kartukeluarga/cetakkartukeluarga/print/{{$kartu_keluarga->nomor_keluarga}}" target="_blank" class="btn btn-default" style="margin-right: 5px;"><i class="fa fa-print"></i> Print</a>
          <a href="/kartukeluarga/cetakkartukeluarga/downloadkkpdf/{{$kartu_keluarga->nomor_keluarga}}" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Download PDF</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  <!-- /.content-wrapper -->
@endsection