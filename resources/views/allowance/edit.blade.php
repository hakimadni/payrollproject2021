@extends('layout.master')
@section('title')
  Edit Allowance
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-10 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
        <a href="/allowance" class="btn btn-danger mb-5 pl-4 pr-4">Back</a>
        <div class="card card-primary">
          <div class="card-header">
            <h4>Edit Allowance</h4></div>

          <div class="card-body">
            <form action="/allowance/{{$allowance->id}}" method="POST">
              @csrf
              @method('put')
              <div class="form-group">
                <label for="name">Allowance Name</label>
                <input id="name" type="text" class="form-control" name="nama" tabindex="1" value="{{$allowance->nama}}" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your allowance name
                </div>
              </div>
              @error('nama')
                      <div class="alert alert-danger">
                        {{ $message }}
                      </div>
                  @enderror
              <div class="form-group">
                <label for="value">Allowance Value</label>
                <input id="value" type="number" class="form-control" name="value" value="{{$allowance->value}}" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your allowance value
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block " tabindex="4">
                  Update
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection