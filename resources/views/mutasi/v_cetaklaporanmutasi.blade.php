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
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12 table-responsive">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NIK</th>
                  <th>Nama Mutasi</th>
                  <th>Jenis Kelamin</th>
                  <th>Pendidikan Terakhir</th>
                  <th>Pekerjaan</th>
                  <th>Status Perkawinan</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; ?>
              @foreach ($mutasi as $mutasi)
                <tr>
                  <td>{{ $no++ }}.</td>
                  <td>{{ $mutasi->nik_mutasi }}</td>
                  <td>{{ $mutasi->nama_mutasi }}</td>
                  <td>{{ $mutasi->jenis_kelamin_mutasi }}</td>
                  <td>{{ $mutasi->pendidikan_terakhir_mutasi }}</td>
                  <td>{{ $mutasi->pekerjaan_mutasi }}</td>
                  <td>{{ $mutasi->status_perkawinan_mutasi }}</td>
                  <td>{{ $mutasi->status_mutasi }}</td>
                </tr>
              </tbody>
              @endforeach
          </table>
        </div>
    </div>
    <div class="row no-print">
        <div class="col-xs-12">
          <a href="/mutasi/cetaklaporanmutasi/printlaporanmutasi/" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          {{-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> --}}
          <a href="/mutasi/cetaklaporanmutasi/downloadlaporanmutasi/" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Download PDF</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>



@endsection