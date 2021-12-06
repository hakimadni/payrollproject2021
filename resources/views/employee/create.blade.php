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
                  <label for="inputEmail4">No.KTP (16 Digits)</label>
                  <input type="number" class="form-control" id="inputEmail" placeholder="Input No.KTP" name="no_ktp">
                </div>
                <div class="form-group col-md-6">
                    <label>Family Status</label>
                    <select name="family_status_id" class="form-control select2">
                      <option selected>Select Family Status</option>
                      @foreach ($FamilyStatus as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Name</label>
                  <input type="text" class="form-control" id="-" placeholder="Input Name" name="nama">
                </div>
                <div class="form-group col-md-6">
                  <label for="poster">Foto Profil</label><br>
                  <input type="file" name="foto_profil" id="body">
                  @error('poster')
                      <div class="alert alert-danger">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Position</label>
                    <select name="position_id" class="form-control select2">
                      <option selected>Select Position</option>
                      @foreach ($Position as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endforeach
                    </select>
                </div>
              </div>

              
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="npwp">NPWP (15 Digits)</label>
                  <input type="number" class="form-control group1" name="npwp" id="npwp" placeholder="Input NPWP">
                  <div class="form-check">
                    <input class="form-check-input" name="npwp" type="checkbox" id="gridCheck" value="0">
                    <script>
                      $(function() {
                        enable_cb();
                        $("#gridCheck").click(enable_cb);
                      });

                      function enable_cb() {
                        if (this.checked) {
                          $("input.group1").attr("disabled", true);
                        } else {
                          $("input.group1").removeAttr("disabled");
                        }
                      }
                    </script>
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