@extends('layouts.app')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-0 p-b-30">
          <form method="POST" action="{{ route('login') }}">
            @csrf
              <span class="login100-form-title p-b-20">
                      Login
              </span>

              <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your email">
                  <div>
                        <input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                         name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
              </div>

              <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your email">
                  <div>
                    <input class="input100" id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                     name="password" required autocomplete="current-password"  placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
              </div>

              <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-3">
                        <button class="login100-form-btn" type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
              </div>

              <div>
      						<a href="#" class="btn-login-with bg1 m-b-10">
      							<i class="fa fa-facebook-official"></i>
      							Login with Facebook
      						</a>

      						<a href="#" class="btn-login-with bg2">
      							<i class="fa fa-twitter"></i>
      							Login with Twitter
      						</a>
      				</div>

              <div class="flex-col-c p-t-50">
                  <span class="txt2 p-b-10">
                  Don’t have an account?
                  </span>
                  <a href="#" class="txt3 bo1 hov1">
                    Sign up now
                  </a>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
