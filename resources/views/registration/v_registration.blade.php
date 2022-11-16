
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('template/')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('template/')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/')}}/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('template/')}}/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Pendataan</b>Warga</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Daftar Anggota Baru</p>

    <form action="/registration/register" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-group has-feedback">
        <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" placeholder="Nama Lengkap" name="name" required>
        @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <select class="form-control selectpicker @error('level') is-invalid  @enderror" value="{{ old('name') }}" id="level" name="level"  required>
            <option value="" selected disabled>- Pilih Level -</option>
            <option value="Admin">Admin</option>
            <option value="RT">RT</option>
            <option value="RW">RW</option>
          </select>
        @error('level')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="email" id="email" class="form-control @error('email') is-invalid  @enderror" value="{{ old('email') }}" placeholder="Email" name="email" required>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        {{-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> --}}
      </div>
      <div class="form-group has-feedback">
        <input type="text" id="address" class="form-control @error('address') is-invalid  @enderror" value="{{ old('address') }}" placeholder="Alamat" name="address" required>
        @error('address')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        {{-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> --}}
      </div>
      <div class="form-group has-feedback">
        <input type="number" id="phone" class="form-control @error('phone') is-invalid  @enderror" value="{{ old('phone') }}" placeholder="No. Telepon" name="phone" required>
        @error('phone')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        {{-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> --}}
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" class="form-control @error('password') is-invalid  @enderror" placeholder="Password" name="password" required>
        {{-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> --}}
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" checked> Saya Menyetujui <a href="#">Ketentuan</a> 
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="/login" class="text-center">Saya Sudah Mempunyai Akun</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{asset('template/')}}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('template/')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="{{asset('template/')}}/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
