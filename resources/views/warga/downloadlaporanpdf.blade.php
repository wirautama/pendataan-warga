
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
  </div>
  <!-- /.row -->
 
      <table class="table table-bordered table-striped" border="1">
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
            </tr>
          </tbody>
          @endforeach 
        </table>
  <!-- Table row -->
  <div class="row">
    <div class="col-lg-12 table-responsive">
      
        
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</body>
</html>
