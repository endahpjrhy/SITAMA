@extends('layouts.auth')
@section('content')
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane active preview" role="tabpanel" id="preview-888">
                        @if ($errors->any())
                             @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">{{ $error }}</div>
                             @endforeach
                                                
                        @endif
                      </div>
                    </div>
                  <h1>Login</h1>
                  <form action="/login" method="post">
                    @csrf
                  <p class="text-medium-emphasis">Please login with your account!</p>
                  <div class="input-group mb-3"><span class="input-group-text">
                    <i class="icon cil-user"></i>
                    </span>
                    <input class="form-control" type="email" name="email" placeholder="Email">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                    <i class="icon cil-lock-locked"></i>
</span>
                    <input class="form-control" type="password" name="password" placeholder="Password">
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
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="submit">Submit</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <div class="card col-md-5 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>Sign up</h2>
                    <p>Don't have an account yet? please register below.</p>
                    <a href="/registrasi">
                    <button class="btn btn-lg btn-outline-light mt-3" type="button">Sign up now!</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection
