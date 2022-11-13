@extends('layouts.v_template')

@section('content')
@section('title', 'Dashboard')
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible">
      {{ session('success') }}!! {{ auth()->user()->name }}</i>
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    </div>
    @endif
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

  
@endsection