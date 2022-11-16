@extends('layouts.v_template')

@section('content')
@section('title', 'Cetak Laporan')
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
        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>NIK</th>
                <th>Nama Warga</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Kawin</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach($warga as $warga)
              <tr>
                <td>{{ $no++ }}.</td>
                <td>{{ $warga->nik_warga }}</td>
                <td>{{ $warga->nama_warga }}</td>
                <td>{{ $warga->jenis_kelamin_warga }}</td>
                <td>{{ $warga->tanggal_lahir_warga }}</td>
                <td>{{ $warga->alamat_warga }}</td>
                <td>{{ $warga->agama_warga }}</td>
                <td>{{ $warga->pendidikan_terakhir_warga }}</td>
                <td>{{ $warga->pekerjaan_warga }}</td>
                <td>{{ $warga->status_perkawinan_warga }}</td>
                <td>{{ $warga->status_warga }}</td>
                <td></td>
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
        <a href="/warga/cetaklaporan/printlaporan/" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
        {{-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
          <i class="fa fa-download"></i> Generate PDF
        </button> --}}
        <a href="/warga/cetaklaporan/downloadlaporanpdf/" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Download PDF</a>
      </div>
    </div>
  </section>
  <!-- /.content -->
  <div class="clearfix"></div>
<!-- /.content-wrapper -->
@endsection