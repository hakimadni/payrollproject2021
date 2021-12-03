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
            <a href="/employee/create" class="btn btn-primary btn-lg mb-3" tabindex="4">
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
                  <th>Nama</th>
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
                  <td class="text-center">0085525225</td>
                  <td>Bu Karti</td>
                  <td class="text-center">Staff</td>
                  <td class="text-center">8552-8585-858</td>
                  <td class="text-center">TKP01</td>
                  <td class="text-center">                    
                    <a href="#" class="btn btn-secondary btn-warning">Update</a>
                    <a href="#" class="btn btn-secondary btn-danger">Remove</a>
                  </td>
                </tr>
                @forelse ($employee as $key=>$value)
                    <tr>
                      <td class="text-center">
                        {{$value->id}}
                      </td>
                      <td class="text-center">{{$value->no_ktp}}</td>
                      <td>{{$value->nama}}</td>
                      <td class="text-center">{{$value->position->nama}}</td>
                      <td class="text-center">{{$value->npwp}}</td>
                      <td class="text-center">{{$value->FamilyStatus->nama}}</td>
                      <td class="text-center">                    
                        <a href="/employee/{{$value->id}}/edit" class="btn btn-warning m-2">Edit</a>
                        <a href="/employee/{{$value->id}}" class="btn btn-success m-2">Show</a>
                          <form action="/employee/{{$value->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                          </form>
                      </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td class="text-center">No data</td>
                        <td class="text-center">No data</td>
                        <td class="text-center">No data</td>
                        <td class="text-center">No data</td>
                        <td class="text-center">No data</td>
                        <td class="text-center">No data</td>
                        <td>
                          <a href="#" class="btn btn-secondary btn-warning m-2">Edit</a>
                          <form action="#" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-secondary btn-danger">
                          </form>
                        </td>
                    </tr>  
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection