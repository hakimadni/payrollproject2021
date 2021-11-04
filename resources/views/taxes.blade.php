@extends('layout.master')
@section('title')
    Taxes
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Taxes Table</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg mb-3" tabindex="4">
              Add Taxes
            </button>
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>                                 
                <tr>
                  <th class="text-center">
                    ID
                  </th>
                  <th>Name</th>
                  <th>Value</th>
                  <th>Members</th>
                </tr>
              </thead>
              <tbody>                                 
                <tr>
                  <td class="text-center">
                    1
                  </td>
                  <td>Create a mobile app</td>
                  <td>
                    Rp. 500.000
                  </td>
                  <td>
                    Mamang Kesbor, KimKim, Putra
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