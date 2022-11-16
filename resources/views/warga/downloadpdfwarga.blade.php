
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cetak Data Warga</title>
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
</body>
</html>
