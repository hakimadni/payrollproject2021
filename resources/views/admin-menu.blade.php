@extends('layout.master')
@section('title')
    Admin Menu
@endsection
@section('content')


<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header justify-content-center"><h1>Admin Code</h1></div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <div class="card-header justify-content-center"><h3>Code</h3></div>
              <div class="container d-flex justify-content-center">
                <h1 class="mb-5">{{$code->code}}</h1>
              </div>
            </div>
            <div class="col">
              <form action="/admin-menu/1" method="post">
                @csrf
                @method('put')
              <div class="form-group">
                <label>New Admin Code (Min. 6 Digit/Max. 12 Digit)</label>
                <input type="text" name="new_code" class="form-control">
                @error('new_code')
                <br>
                  <div class="alert alert-danger">ERROR</div>
                @enderror
              </div>
              <div class="form-group">
                <label> Re-input Admin Code </label>
                <input type="text" name="new_code_confirmation" class="form-control">
              </div>
              <button class="btn btn-primary btn-lg" type="submit">Change</button>
              </form>
            </div>
          </div>
        </div>
      </div>



@endsection