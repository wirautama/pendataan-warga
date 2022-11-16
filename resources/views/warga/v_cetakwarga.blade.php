@extends('layouts.v_template')
@section('content')
@section('title', 'Cetak Warga')
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
            <strong>{{ $warga->nama_warga }}</strong><br>
            NIK : {{ $warga->nik_warga }}<br>
            {{ $warga->alamat_warga }}<br>
            {{ $warga->pekerjaan_warga }}
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>ID User : {{ $warga->id_user }}</b><br>
          <br>
          <b>Created :</b>{{ $warga->created_at }} <br>
          <b>Updated :</b> {{ $warga->updated_at }}<br>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-lg-12 table-responsive">
          <h3>A. Data Pribadi</h3>
            <table class="table table-striped">
              <tr>
                <th width="20%">NIK</th>
                <td width="1%">:</td>
                <td>{{ $warga->nik_warga }}</td>
              </tr>
              <tr>
                <th>Nama Warga</th>
                <td>:</td>
                <td>{{ $warga->nama_warga }}</td>
              </tr>
              <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>{{ $warga->tempat_lahir_warga }}</td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    {{ $warga->tanggal_lahir_warga }}
                </td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>{{ $warga->jenis_kelamin_warga }}</td>
              </tr>
            </table>

            <h3>B. Data Alamat</h3>
            <table class="table table-striped">
              <tr>
                <th width="20%">Alamat KTP</th>
                <td width="1%">:</td>
                <td>{{ $warga->alamat_ktp_warga }}</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>{{ $warga->alamat_warga }}</td>
              </tr>
              <tr>
                <th>Desa/Kelurahan</th>
                <td>:</td>
                <td>{{ $warga->desa_kelurahan_warga }}</td>
              </tr>
              <tr>
                <th>Kecamatan</th>
                <td>:</td>
                <td>{{ $warga->kecamatan_warga }}</td>
              </tr>
              <tr>
                <th>Kabupaten/Kota</th>
                <td>:</td>
                <td>{{ $warga->kabupaten_kota_warga }}</td>
              </tr>
              <tr>
                <th>Provinsi</th>
                <td>:</td>
                <td>{{ $warga->provinsi_warga }}</td>
              </tr>
              <tr>
                <th>Negara</th>
                <td>:</td>
                <td>{{ $warga->negara_warga }}</td>
              </tr>
              <tr>
                <th>RT</th>
                <td>:</td>
                <td>{{ $warga->rt_warga }}</td>
              </tr>
              <tr>
                <th>RW</th>
                <td>:</td>
                <td>{{ $warga->rw_warga }}</td>
              </tr>
            </table>

            <h3>C. Data Lain-lain</h3>
            <table class="table table-striped">
              <tr>
                <th width="20%">Agama</th>
                <td width="1%">:</td>
                <td>{{ $warga->agama_warga }}</td>
              </tr>
              <tr>
                <th>Pendidikan</th>
                <td>:</td>
                <td>{{ $warga->pendidikan_terakhir_warga }}</td>
              </tr>
              <tr>
                <th>Pekerjaan</th>
                <td>:</td>
                <td>{{ $warga->pekerjaan_warga }}</td>
              </tr>
              <tr>
                <th>Status Perkawinan</th>
                <td>:</td>
                <td>{{ $warga->status_perkawinan_warga }}</td>
              </tr>
              <tr>
                <th>Status Tinggal</th>
                <td>:</td>
                <td>{{ $warga->status_warga }}</td>
              </tr>
            </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="/warga/printdatawarga/{{$warga->nik_warga}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          {{-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> --}}
          <a href="/warga/downloadpdfwarga/{{$warga->nik_warga}}" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Download PDF</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  <!-- /.content-wrapper -->
@endsection