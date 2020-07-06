@extends('layouts.loginlayout')
@section('content')

          <form method="POST" action="{{ route('password.email') }}">
              @csrf
              <span class="login100-form-title p-b-20" style="padding:100px; color:white">
                      Reset
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

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-2">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Send Password Reset Link') }}
                      </button>
                  </div>
              </div>
          </form>
@endsection
