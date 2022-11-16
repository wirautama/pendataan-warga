<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cetak Data Kartu Keluarga</title>
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
<body>
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
  <br>
  <!-- /.row -->
    <div class="row">
        
    <div class="col-lg-12 table-responsive">
      <h3>A. Data Pribadi</h3>
      <table class="table table-striped table-middle">
        <tr>
          <td width="20%">Nomor Kartu Keluarga</td>
          <td width="1%">:</td>
          <td>{{ $kartu_keluarga->nomor_keluarga }}</td>
        </tr>
        <tr>
          <td>Kepala Keluarga</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->nama_warga }}</td>
        </tr>
        <tr>
          <td>NIK Kepala Keluarga</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->nik_kepala_keluarga }}</td>
        </tr>
        <tr>
          <td>Jumlah Anggota Keluarga</td>
          <td>:</td>
          <td>{{ $hitung_anggota }} orang</td>
        </tr>
      </table>
      
      <h3>B. Data Alamat</h3>
      <table class="table table-striped">
        <tr>
          <td width="20%">Alamat</td>
          <td width="1%">:</td>
          <td>{{ $kartu_keluarga->alamat_keluarga }}</td>
        </tr>
        <tr>
          <td>RT</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->rt_keluarga }}</td>
        </tr>
        <tr>
          <td>RW</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->rw_keluarga }}</td>
        </tr>
        <tr>
          <td>Desa/Kelurahan</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->desa_kelurahan_keluarga }}</td>
        </tr>
        <tr>
          <td>Kecamatan</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->kecamatan_keluarga }}</td>
        </tr>
        <tr>
          <td>Kabupaten/Kota</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->kabupaten_kota_keluarga }}</td>
        </tr>
        <tr>
          <td>Provinsi</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->provinsi_keluarga }}</td>
        </tr>
        <tr>
          <td>Negara</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->negara_keluarga }}</td>
        </tr>
        <tr>
          <td>Kode Pos</td>
          <td>:</td>
          <td>{{ $kartu_keluarga->kode_pos_keluarga }}</td>
        </tr>
      </table>
      <h3>D. Data Anggota Kartu Keluarga</h3>
      <table id="example1" class="table table-bordered table-striped" border="1">
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
</body>
</html>

