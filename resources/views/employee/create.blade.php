@extends('layout.master')
@section('title')
    Add Employee
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2 col-md-10 offset-md-3 col-lg-6 offset-lg-3 col-xl-10 offset-xl-1">
        <a href="/employee" class="btn btn-danger mb-5 pl-4 pr-4">Back</a>
        <div class="card card-primary">
          <div class="card-header">
            <h4>Add Employee</h4></div>

          <div class="card-body">
            <form method="POST" action="/employee" enctype="multipart/form-data" class="needs-validation" novalidate="">
              @csrf
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">No.KTP</label>
                  <input type="number" class="form-control" id="inputEmail" placeholder="Input No.KTP">
                </div>
                <div class="form-group col-md-6">
                    <label>Family Status</label>
                    <select class="form-control select2">
                      <option selected>Select Family Status</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Name</label>
                  <input type="text" class="form-control" id="-" placeholder="Input Name">
                </div>
                <div class="form-group col-md-6">
                    <label>Upload Photo :</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Position</label>
                    <select class="form-control select2">
                      <option selected>Select Position</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                      {{-- @foreach ($FamilyStatus as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach --}}
                    </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">NPWP</label>
                  <input type="number" class="form-control" name="npwp" id="-" placeholder="Input NPWP">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Without NPWP
                    </label>
                  </div>
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