@extends('layout.masterauth')
@section('content')
    <div id="app">
      <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="login-brand">
                    <img src="{{asset('img/Group 15.png')}}" alt="logo" height="100" width="100" class="shadow-light rounded-circle">
                </div>
  
              <div class="card card-primary">
                <div class="card-header"><h4>Register</h4></div>
  
                <div class="card-body">
                  <form method="POST">

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input id="name" type="name" class="form-control" name="name">
                      <div class="invalid-feedback">
                      </div>
                    </div>
  
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="password" class="d-block">Password</label>
                        <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                        <div id="pwindicator" class="pwindicator">
                          <div class="bar"></div>
                          <div class="label"></div>
                        </div>
                      </div>
                      <div class="form-group col-6">
                        <label for="password2" class="d-block">Password Confirmation</label>
                        <input id="password2" type="password" class="form-control" name="password-confirm">
                      </div>
                    </div>
                        
                    <!--TOLONG KOREKSI INI KEKNYA SALAH DAH NGATAU BENER ATO KAGA -->
                    <div class="form-group">
                        <label for="admincode">Admin Code</label>
                        <input id="text" type="text" class="form-control" name="admincode">
                        <div class="invalid-feedback">
                        </div>
                      </div>
  
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="mt-5 text-muted text-center">
                Already have an account? <a href="/login">Log in</a>
              </div>
              <div class="simple-footer">
                Copyright &copy; Stisla 2018
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection