@extends('layouts.v_template')

@section('content')
@section('title', 'Cetak Mutasi')

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
            <h3>A. Data Pribadi</h3>
            <table class="table table-striped">
              <tr>
                <th width="20%">NIK</th>
                <td width="1%">:</td>
                <td>{{ $mutasi->nik_mutasi }}</td>
              </tr>
              <tr>
                <th>Nama Mutasi</th>
                <td>:</td>
                <td>{{ $mutasi->nama_mutasi }}</td>
              </tr>
              <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>{{ $mutasi->tempat_lahir_mutasi }}</td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>{{ $mutasi->tanggal_lahir_mutasi }}</td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>{{ $mutasi->jenis_kelamin_mutasi }}</td>
              </tr>
            </table>
            
            <h3>B. Data Alamat</h3>
            <table class="table table-striped">
              <tr>
                <th width="20%">Alamat KTP</th>
                <td width="1%">:</td>
                <td>{{ $mutasi->alamat_ktp_mutasi }}</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>{{ $mutasi->alamat_mutasi }}</td>
              </tr>
              <tr>
                <th>Desa/Kelurahan</th>
                <td>:</td>
                <td>{{ $mutasi->desa_kelurahan_mutasi }}</td>
              </tr>
              <tr>
                <th>Kecamatan</th>
                <td>:</td>
                <td>{{ $mutasi->kecamatan_mutasi }}</td>
              </tr>
              <tr>
                <th>Kabupaten/Kota</th>
                <td>:</td>
                <td>{{ $mutasi->kabupaten_kota_mutasi }}</td>
              </tr>
              <tr>
                <th>Provinsi</th>
                <td>:</td>
                <td>{{ $mutasi->provinsi_mutasi }}</td>
              </tr>
              <tr>
                <th>Negara</th>
                <td>:</td>
                <td>{{ $mutasi->negara_mutasi }}</td>
              </tr>
              <tr>
                <th>RT</th>
                <td>:</td>
                <td>{{ $mutasi->rt_mutasi }}</td>
              </tr>
              <tr>
                <th>RW</th>
                <td>:</td>
                <td>{{ $mutasi->rw_mutasi }}</td>
              </tr>
            </table>
            
            <h3>C. Data Lain-lain</h3>
            <table class="table table-striped">
              <tr>
                <th width="20%">Agama</th>
                <td width="1%">:</td>
                <td>{{ $mutasi->agama_mutasi }}</td>
              </tr>
              <tr>
                <th>Pendidikan</th>
                <td>:</td>
                <td>{{ $mutasi->pendidikan_terakhir_mutasi }}</td>
              </tr>
              <tr>
                <th>Pekerjaan</th>
                <td>:</td>
                <td>{{ $mutasi->pekerjaan_mutasi }}</td>
              </tr>
              <tr>
                <th>Status Perkawinan</th>
                <td>:</td>
                <td>{{ $mutasi->status_perkawinan_mutasi }}</td>
              </tr>
              <tr>
                <th>Status Tinggal</th>
                <td>:</td>
                <td>{{ $mutasi->status_mutasi }}</td>
              </tr>
            </table>
            
        </div>
    </div>
    <div class="row no-print">
        <div class="col-xs-12">
          <a href="/mutasi/cetakmutasi/printmutasi/{{$mutasi->nik_mutasi}}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          {{-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> --}}
          <a href="/mutasi/cetakmutasi/downloadmutasi/{{$mutasi->nik_mutasi}}" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Download PDF</a>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>



@endsection