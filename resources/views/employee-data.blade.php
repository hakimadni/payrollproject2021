@extends('layout.master')
@section('title')
    Employee Data
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Employee Data Table</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <a href="/add-employee" class="btn btn-primary btn-lg mb-3" tabindex="4">
              Add Employee
            </a>
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>                                 
                <tr>
                  <th class="text-center">
                    ID
                  </th>
                  <th class="text-center">No.KTP</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Jabatan</th>
                  <th class="text-center">NPWP</th>
                  <th class="text-center">Family Status</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>                                 
                <tr>
                  <td class="text-center">
                    1
                  </td>
                  <td>0085525225</td>
                  <td>Bu Karti</td>
                  <td>Staff</td>
                  <td>8552-8585-858</td>
                  <td>TKP01</td>
                  <td class="text-center">                    
                    <a href="#" class="btn btn-secondary btn-warning">Change</a>
                    <a href="#" class="btn btn-secondary btn-danger">Remove</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection