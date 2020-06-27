@extends('layouts.app')

@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-0 p-b-30">
          <form method="POST" action="{{ route('register') }}">
              @csrf
                <span class="login100-form-title p-b-20">
                    Registration
                </span>

           <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your first name">
              <div>
                  <input class="input100" id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                  value="{{ old('first_name') }}" required autocomplete="first_name" placeholder="First name" autofocus >
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
           </div>

           <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your last name">
              <div>
                  <input class="input100" id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                  value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last name" autofocus >
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
           </div>

           <div class="wrap-input100 validate-input m-b-16" data-validate="Please select your country">
              <div>
                  <input class="input100" id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country"
                  value="{{ old('country') }}" required autocomplete="country" placeholder="Country" autofocus >
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
           </div>


           <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
              <div>
                  <input class="input100" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                  value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus >
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
           </div>

           <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
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

           <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email: ex@abc.xyz">
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
        </div>
    </div>
</div>
@endsection
