
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pendataan Warga | Log in</title>
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

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

  
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Pendataan</b>Warga</a>
  </div>
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible">
      {{ session('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
  @endif
  <!-- /.login-logo -->
  <div class="login-box-body">
    
{{-- 
  @if(session('LoginError'))
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4> Success! {{ session('LoginError') }}. <i class="glyphicon glyphicon-ok"></i></h4>
    </div>
  @endif --}}

  

    <p class="login-box-msg">Masuk Untuk Memulai Sesi Anda</p>

    <form action="{{ route('postlogin') }}" method="POST" enctype="multipart/form-data">
      @csrf 
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Username" name="email">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          {{-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Ingat Saya
            </label>
          </div> --}}
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    

    
    <!-- /.social-auth-links -->

    <a href="#">Lupa Password</a><br>
    <a href="/registration" class="text-center">Daftar Akun Baru</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

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
