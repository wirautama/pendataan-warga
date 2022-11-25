@extends('layouts.v_template')

@section('content')
@section('title', 'Dashboard')
<section class="content">
  <!-- Small boxes (Stat box) -->
  @if(session()->has('success'))
    <div class="row">
      <div class="col-lg-4 col-xs-6">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Sukses!</h4>
        {{ session('success') }}!! {{ auth()->user()->name }}
      </div>
    </div>
    </div>
  @endif
  <div class="row">

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $warga }}</h3>

          <p>WARGA</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="/warga" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $kartukeluarga }}</h3>

          <p>KARTU KELUARGA</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="/kartukeluarga" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    @can('Admin')
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $user }}</h3>

          <p>PENGGUNA TERDAFTAR</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    @endcan
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $mutasi }}</h3>

          <p>MUTASI</p>
        </div>
        <div class="icon">
          <i class="glyphicon glyphicon-send"></i>
        </div>
        <a href="/mutasi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

  <script>
    $(document).ajaxStart(function() { Pace.restart(); });

  </script>
@endsection