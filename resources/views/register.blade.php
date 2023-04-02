@extends('layouts.auth')
@section('content')
<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">
              <div class="card-body p-4">
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane active preview" role="tabpanel" id="preview-888">
                        @if ($errors->any())
                             @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">{{ $error }}</div>
                             @endforeach
                                                
                        @endif
                      </div>
                    </div>

                <h1>Registration</h1>
                <p class="text-medium-emphasis">Create your account</p>
                <form action="/registrasi" method="post">
                    @csrf
                <div class="input-group mb-3"><span class="input-group-text">
                    <i class="icon cil-user"></i>
                </span>
                  <input class="form-control" type="text" required name="nama" placeholder="Nama" value="{{ old('nama') }}">
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                    <i class="icon cil-envelope-open"></i></span>
                  <input class="form-control" type="email" required name="email" placeholder="Email" value="{{ old('email') }}">
                </div>
                <div class="input-group mb-3"><span class="input-group-text">
                    <i class="icon cil-lock-locked"></i></span>
                  <input class="form-control" type="password" required name="password" placeholder="Password">
                </div>
                <div class="input-group mb-4"><span class="input-group-text">
                    <i class="icon cil-lock-locked"></i></span>
                  <input class="form-control" type="password" name="password_confirmation" required placeholder="Repeat password">
                </div>
                <div class="form-group mb-4">
                  <div class="mb-3">
                  <span id="captcha-img">
                      {!!captcha_img('flat')!!}
                  </span>
                  
                  </div>
                  <div class="input-group"><span class="input-group-text"><i class="icon cil-https"></i></span>
                    <input class="form-control" type="text" name="captcha" required="" placeholder="Captcha">
                  </div>
                </div>
                <button class="btn btn-block btn-success" type="submit">create account</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
