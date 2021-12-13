@extends('layout.master')
@section('title')
    Allowance
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Allowance Table</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <a href="/allowance/create" class="btn btn-primary btn-lg mb-3" tabindex="4">
              Add Allowance
            </a>
          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>                                 
                <tr>
                  <th class="text-center">
                    ID
                  </th>
                  <th>Name</th>
                  <th>Value</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($allowance as $key=>$value)
                    <tr>
                        <td class="text-center">{{$value->id}}</td>
                        <td>{{$value->nama}}</td>
                        <td>Rp<?php echo number_format ($value->value) ?></td>
                        <td>
                          <a href="/allowance/{{$value->id}}/edit" class="btn btn-warning m-2">Edit</a>
                          <form action="/allowance/{{$value->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-danger">
                          </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
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