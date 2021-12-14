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
                @forelse ($FamilyStatus as $key=>$value)
                    <tr>
                        <td class="text-center">{{$value->nama}}</td>
                        <td>{{$value->deskripsi}}</td>
                        <td>Rp<?php echo number_format ($value->value) ?></td>
                        <td></td>
                        <td>
                          <a href="/family_status/{{$value->id}}/edit" class="btn btn-warning m-2">Edit</a>
                          @if (count($employee->where('family_status_id', $value->id)) > 0)
                              <input value="Position Taken" disabled class="btn btn-danger">
                          @else
                          <form action="/family_status/{{$value->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                          </form>
                          @endif
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