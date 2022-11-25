<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cetak Laporan Kartu Keluarga</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('template/') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/') }}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('template/') }}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
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
      <h3>A. Data Pribadi</h3>
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


</body>
</html>