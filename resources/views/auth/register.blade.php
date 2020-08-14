@extends('layouts.loginlayout')
@section('content')

          <form method="POST" action="{{ route('register') }}">
              @csrf
                <span class="login100-form-title p-b-20" style="padding:40px; color:white" >
                    Registration
                </span>

           <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your name">
              <div>
                  <input class="input100" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                  value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus >
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
           </div>


           <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
              <div>
                  <input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus >
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
           </div>

           <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your password">
              <div>
                  <input class="input100" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                  required autocomplete="new-password"  placeholder="Password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
           </div>

           <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter confirm password">
              <div>
                  <input class="input100" id="password-confirm" type="password" class="form-control" name="password_confirmation"
                  required autocomplete="new-password"  placeholder="Confirm password">
              </div>
           </div>

           <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Register') }}
                  </button>
              </div>
           </div>
         </form>
@endsection
