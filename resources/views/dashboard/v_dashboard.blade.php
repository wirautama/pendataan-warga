@extends('layouts.v_template')

@section('content')
@section('title', 'Dashboard')
<div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="panel panel-primary">
        <div class="panel-body">
          <h3>Data Warga</h3>
          <p>
            Total ada  di antaranya laki-laki, dan  diantaranya perempuan.
          </p>
          <p>
             Warga di atas 17 tahun berjumlah  orang, dan di bawah 17 tahun berjumlah  orang.
          </p>
        </div>
        <div class="panel-footer">
          <a href="../warga" class="btn btn-primary" role="button">
            <span class="glyphicon glyphicon-book"></span> Detail »
          </a>
        </div>
      </div>
    </div>
  
    <div class="col-sm-6 col-md-4">
      <div class="panel panel-primary">
        <div class="panel-body">
          <h3>Data Kartu Keluarga</h3>
          <p>Total ada  data kartu keluarga</p>
        </div>
        <div class="panel-footer">
          <a href="../kartu-keluarga" class="btn btn-primary" role="button">
            <span class="glyphicon glyphicon-inbox"></span> Detail »
          </a>
        </div>
      </div>
    </div>
  
    <div class="col-sm-6 col-md-4">
      <div class="panel panel-primary">
        <div class="panel-body">
          <h3>Data Mutasi</h3>
          <p>
            Total ada  data mutasi.  di antaranya laki-laki, dan  diantaranya perempuan.
          </p>
          <p>
             Warga di atas 17 tahun berjumlah  orang, dan di bawah 17 tahun berjumlah  orang.
          </p>
        </div>
        <div class="panel-footer">
          <a href="../mutasi" class="btn btn-primary" role="button">
            <span class="glyphicon glyphicon-export"></span> Detail »
          </a>
        </div>
      </div>
    </div>
  </div>
  
@endsection