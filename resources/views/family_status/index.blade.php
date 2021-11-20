@extends('layout.master')
@section('title')
    Family Status
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Family Status Table</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <a href="/family_status/create" class="btn btn-primary btn-lg mb-3" tabindex="4">
              Add Family Status
            </a>
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>                                 
                <tr>
                  <th class="text-center">
                    Family Status (PTKP)
                  </th>
                  <th>Type</th>
                  <th>Value</th>
                  <th>Employee ID</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>                                 
                <tr>
                  <td class="text-center">
                    TK0
                  </td>
                  <td>Not Married, No Responsibilities</td>
                  <td>
                    Rp. 54.000.000
                  </td>
                  <td>
                    12, 14, 40, 30
                  </td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                <tr>
                  <td class="text-center">
                    TK1
                  </td>
                  <td>Not Married, 1 Responsibility</td>
                  <td>
                    Rp. 58.500.000
                  </td>
                  <td>
                    12, 14, 40, 30
                  </td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                <tr>
                  <td class="text-center">
                    TK2
                  </td>
                  <td>Not Married, 2 Responsibilities</td>
                  <td>
                    Rp. 63.000.000
                  </td>
                  <td>
                    12, 14, 40, 30
                  </td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                <tr>
                  <td class="text-center">
                    TK3
                  </td>
                  <td>Not Married, 3 Responsibilities</td>
                  <td>
                    Rp. 58.500.000
                  </td>
                  <td>
                    12, 14, 40, 30
                  </td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                <tr>
                  <td class="text-center">
                    K0
                  </td>
                  <td>Married, No Responsibilities</td>
                  <td>
                    Rp. 58.500.000
                  </td>
                  <td>
                    12, 14, 40, 30
                  </td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                <tr>
                  <td class="text-center">
                    K1
                  </td>
                  <td>Married, 1 Responsibility</td>
                  <td>
                    Rp. 63.000.000
                  </td>
                  <td>
                    12, 14, 40, 30
                  </td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                <tr>
                  <td class="text-center">
                    K2
                  </td>
                  <td>Married, 2 Responsibilities</td>
                  <td>
                    Rp. 67.500.000
                  </td>
                  <td>
                    12, 14, 40, 30
                  </td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                <tr>
                  <td class="text-center">
                    K3
                  </td>
                  <td>Married, 3 Responsibilities</td>
                  <td>
                    Rp. 72.000.000
                  </td>
                  <td>
                    12, 14, 40, 30
                  </td>
                  <td><a href="#" class="btn btn-warning">Edit</a></td>
                </tr>
                @forelse ($FamilyStatus as $key=>$value)
                    <tr>
                        <td class="text-center">{{$value->nama}}</td>
                        <td>{{$value->deskripsi}}</td>
                        <td>{{$value->value}}</td>
                        <td></td>
                        <td></td>
                        <td>
                          <a href="/family_status/{{$value->id}}/edit" class="btn btn-warning m-2">Edit</a>
                          <form action="/family_status/{{$value->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                        </td>
                        
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data</td>
                        <td>No data</td>
                        <td>No data</td>
                        <td>No data</td>
                        <td>No data</td>
                    </tr>  
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection