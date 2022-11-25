@extends('layouts.v_template')

@section('content')
@section('title', 'Cetak Laporan User')

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
                    <th>ID</th>
                    <th>Nama</th>
                    <th>level</th>
                    {{-- <th>Alamat</th> --}}
                    <th>Email</th>
                    <th>Nomor HP</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                @foreach ($user as $data)
                  <tr>
                    <td>{{ $no++ }}.</td>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->level }}</td>
                    {{-- <td>{{ $data->address }}</td> --}}
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                  </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row no-print">
        <div class="col-xs-12">
          <a href="/user/cetaklaporanuser/printlaporanuser/" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          {{-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> --}}
          <a href="/user/cetaklaporanuser/downloadlaporanuser/" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Download PDF</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>



@endsection