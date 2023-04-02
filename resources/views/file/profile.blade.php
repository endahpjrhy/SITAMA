@extends('layouts.app')
@section('content')
<div class="card mb-4">
            <div class="card-header">Edit User Profil</div>
            <div class="card-body">
                    
                
              <div class="tab-content rounded-bottom">
                      <div class="tab-pane active preview" role="tabpanel" id="preview-888">
                        @if ($errors->any())
                             @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">{{ $error }}</div>
                             @endforeach
                                                
                        @endif

                        @if ($sukses = Session::get('isoh'))
                                <div class="alert alert-success" role="alert">{{ $sukses }}</div>
                        @endif
                      </div>
                    </div>
              <form action="/prosesupdateprofile" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="{{$data->email}}" disabled>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}" required>
                    </div>
                </div>
              
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" value="">
                    </div>
                </div>
              
                <div class="row mb-3">
                    <label for="password_confirmation" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="">
                    </div>
                </div>
              
               
                
                <button type="submit" class="btn btn-primary w-100 mt-3">Simpan</button>

            </form>
           
            </div>
          </div>
@endsection