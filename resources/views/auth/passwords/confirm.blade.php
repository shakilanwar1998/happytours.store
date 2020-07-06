@extends('layouts.loginlayout')
@section('content')

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <span class="login100-form-title p-b-20" style="padding:100px; color:white">
                            Confirm Password
                        </span>

                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your password">
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
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3" style="padding-top:20px;">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color:#FF0A03" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
@endsection
