@extends('layouts.v_template')

@section('content')
@section('title', 'Profile')

@if(session('message'))
    <div class="row">
      <div class="col-lg-4 col-xs-8">
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Sukses!!</h4>
          {{ session('message') }}
        </div>
      </div>
    </div>
@endif

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="image-circle img-responsive img-rounded"  src="{{ Storage::url(auth()->user()->image) }}" alt="User profile picture">
              <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

              <p class="text-muted text-center">{{ auth()->user()->level }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>No. ID :</b> <a class="pull-right">{{ auth()->user()->id }}</a>
                </li>
                <li class="list-group-item">
                  <b>Email :</b> <a class="pull-right">{{ auth()->user()->email }}</a>
                </li>
                <li class="list-group-item">
                  <b>Alamat :</b> <a class="pull-right">{{ auth()->user()->address }}</a>
                  <br>
                  <br>
                  <br>
                </li>
                <li class="list-group-item">
                    
                  <b>No. HP :</b> <a class="pull-right">{{ auth()->user()->phone }}</a>
                </li>
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <div class="tab-content">
                <h3 class="text-center">Ubah Password</h3>
                <div class="post clearfix">
                  
                    <div class="tab-pane" id="settings">
                        <form action="{{ route('ubahpassword') }}" class="form-horizontal" method="POST">
                          @csrf
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Password Lama</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control @error('password_lama') is-invalid @enderror" id="inputName" name="password_lama" placeholder="Password Lama">
                              <div class="text-danger">
                                @error('password_lama')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Password Baru</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control @error('password_baru') is-invalid @enderror" id="inputName" placeholder="Password Baru" name="password_baru">
                                  <div class="text-danger">
                                    @error('password_baru')
                                      <div class="invalid-feedback">
                                        {{ $message }}
                                      </div>
                                    @enderror
                                  </div>
                                </div>
                              </div>
    
                          <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Konfirmasi Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control @error('konfirmasi_password') is-invalid @enderror" id="inputEmail" name="konfirmasi_password" placeholder="Konfirmasi Password">
                              <div class="text-danger">
                                @error('konfirmasi_password')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Ubah Password</button>
                            </div>
                          </div>
                        </form>

                        
                      </div>


                      <div class="col-md-9">
                        <div class="nav-tabs-custom">
                          <div class="tab-content">
                              <h3 class="text-center">Ubah Foto Profil</h3>
                              <div class="post clearfix">
                                
                                  <div class="tab-pane" id="settings">
                                      <form action="/profile/ubahimage" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                          <label for="inputName" class="col-sm-2 control-label">Foto Baru</label>
                                          <div class="col-sm-10">
                                            <input type="hidden" name="oldImage" value="{{ Storage::url(auth()->user()->image) }}">
                                            {{-- @if(Storage::url(auth()->user()->image))
                                            <img src="{{ Storage::url(auth()->user()->image) }}" class="img-preview img-fluid mb-3 col-sm-4 d-block">
                                            @else
                                              
                                            @endif --}}
                                            <img class="img-preview img-fluid mb-3 col-sm-6">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                                            <div class="text-danger">
                                              @error('image')
                                                <div class="invalid-feedback">
                                                  {{ $message }}
                                                </div>
                                              @enderror
                                            </div>
                                          </div>
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                          <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Ubah Foto </button>
                                          </div>
                                        </div>
                                      </form>
                                    </div> 
<script>

function previewImage(){
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block';
  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}  

</script>
@endsection

