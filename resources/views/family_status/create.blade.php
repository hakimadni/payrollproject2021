@extends('layout.master')
@section('title')
    Add Family Status
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-10 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
        <a href="/family_status" class="btn btn-danger mb-5 pl-4 pr-4">Back</a>
        <div class="card card-primary">
          <div class="card-header">
            <h4>Add Family Status</h4></div>

          <div class="card-body">
            <form method="POST" action="/family_status" class="needs-validation" novalidate="">
              @csrf
              <div class="form-group">
                <label for="name">Family Status Name</label>
                <input id="name" type="text" class="form-control" name="nama" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your Family Status name
                </div>
              </div>
              @error('nama')
                      <div class="alert alert-danger">
                        {{ $message }}
                      </div>
                  @enderror
              <div class="form-group">
                <label for="deskripsi">Family Status Description</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" name="deskripsi" tabindex="1" required autofocus></textarea>
                
                <div class="invalid-feedback">
                  Please fill in your Family Status Description
                </div>
              </div>
              <div class="form-group">
                <label for="value">Family Status Value</label>
                <input id="value" type="number" class="form-control" name="value" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your Family Status value
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block " tabindex="4">
                  Add
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection