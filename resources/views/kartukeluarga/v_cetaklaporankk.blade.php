@extends('layouts.v_template')

@section('content')
@section('title', 'Cetak Laporan Kartu Keluarga')
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
      <!-- /.col -->
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-lg-12 table-responsive">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nomor KK</th>
                <th>Kepala Keluarga</th>
                <th>NIK Kepala Keluarga</th>
                <th>Alamat</th>
                <th>RT</th>
                <th>RW</th>
              </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
            @foreach ($kartu_keluarga as $data)
            {{-- @foreach ($hitung_anggota as $anggota) --}}
              <tr>
                <td>{{ $no++ }}.</td>
                <td>{{ $data->nomor_keluarga }}</td>
                <td>{{ $data->nama_warga }}</td>
                <td>{{ $data->nik_kepala_keluarga }}</td>
                <td>{{ $data->alamat_keluarga }}</td>
                <td>{{ $data->rt_keluarga }}</td>
                <td>{{ $data->rw_keluarga }}</td>
              </tr>
            </tbody>
            @endforeach
        </table>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    
    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-xs-12">
        <a href="/kartukeluarga/cetaklaporankk/printlaporankk/" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        {{-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
          <i class="fa fa-download"></i> Generate PDF
        </button> --}}
        <a href="/kartukeluarga/cetaklaporankk/downloadlaporankkpdf/" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Download PDF</a>
      </div>
    </div>
  </section>
  <!-- /.content -->
  <div class="clearfix"></div>
<!-- /.content-wrapper -->
@endsection