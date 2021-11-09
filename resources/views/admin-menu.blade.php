@extends('layout.master')
@section('title')
    Admin Menu
@endsection
@section('content')


<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>User Table</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-md">
              <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Created At</th>
                <th>Admin Status</th>
                <th>Action</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Irwansyah Saputra</td>
                <td>2017-01-09</td>
                <td><div class="badge badge-success">Active</div></td>
                <td>
                    <a href="#" class="btn btn-secondary btn-success">Grant</a>
                    <a href="#" class="btn btn-secondary btn-warning">Retract</a>
                    <a href="#" class="btn btn-secondary btn-danger">Remove</a>
                </td>
                
              </tr>
              <tr>
                <td>2</td>
                <td>Hasan Basri</td>
                <td>2017-01-09</td>
                <td><div class="badge badge-success">Active</div></td>
                <td>                    
                    <a href="#" class="btn btn-secondary btn-success">Grant</a>
                    <a href="#" class="btn btn-secondary btn-warning">Retract</a>
                    <a href="#" class="btn btn-secondary btn-danger">Remove</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Kusnadi</td>
                <td>2017-01-11</td>
                <td><div class="badge badge-danger">Not Active</div></td>
                <td>
                    <a href="#" class="btn btn-secondary btn-success">Grant</a>
                    <a href="#" class="btn btn-secondary btn-warning">Retract</a>
                    <a href="#" class="btn btn-secondary btn-danger">Remove</a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Rizal Fakhri</td>
                <td>2017-01-11</td>
                <td><div class="badge badge-success">Active</div></td>
                <td>                    
                    <a href="#" class="btn btn-secondary btn-success">Grant</a>
                    <a href="#" class="btn btn-secondary btn-warning">Retract</a>
                    <a href="#" class="btn btn-secondary btn-danger">Remove</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header justify-content-center"><h1>Admin Code</h1></div>
    <div class="card-body">
      <div class="row">
        <div class="col">
          <div class="card-header justify-content-center"><h3>Code</h3></div>
          <div class="container d-flex justify-content-center">
            <h1 class="mb-5">5234</h1>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label>New Admin Code</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Re-input Admin Code</label>
            <input type="text" class="form-control">
          </div>
          <a href="#" class="btn btn-danger">Change</a>
        </div>
      </div>
    </div>
  </div>



@endsection