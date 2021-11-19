@extends('layout.masterauth')
@section('content')
    <div id="app">
      <section class="section">
        <div class="container mt-3">
          <div class="row">
            <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
                <div class="login-brand">
                    <img src="{{asset('img/Group 15.png')}}" alt="logo" height="100" width="100" class="shadow-light rounded-circle">
                </div>
  
              <div class="card card-primary shadow">
                <div class="card-header"><h4>Register</h4></div>
  
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <div class="card-body">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                      <x-label for="name" :value="__('Name')" />

                      <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                      <div class="invalid-feedback">
                      </div>
                    </div>

                    <div class="form-group">
                      <x-label for="email" :value="__('Email')" />

                      <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                      <div class="invalid-feedback">
                      </div>
                    </div>
  
                    <div class="row">
                        <div class="form-group col-12">
                            <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="form-control pwstrength"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />
                                <div id="pwindicator" class="pwindicator">
                                    <div class="bar"></div>
                                    <div class="label"></div>
                                    </div>                 
                                </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-input id="password_confirmation" class="form-control"
                                                type="password"
                                                name="password_confirmation" required />
                            </div>
                        </div>
                    </div>

                    
                        
                    <!--TOLONG KOREKSI INI KEKNYA SALAH DAH NGATAU BENER ATO KAGA -->
                    <div class="form-group">
                        <label for="admincode">Admin Code</label>
                        <input id="text" type="text" class="form-control shadow-light" name="">
                        <div class="invalid-feedback">
                        </div>
                      </div>
  
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        {{ __('Register') }}
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="mt-5 text-muted text-center">
                Already have an account? <a href="{{ route('login') }}">Log in</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection