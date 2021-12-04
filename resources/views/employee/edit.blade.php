@extends('layout.master')
@section('title')
    Edit Employee {{$employee->id}} Details
@endsection
@section('content')

        <a href="/employee" class="btn btn-danger mb-1 pl-4 pr-4">Back</a> 
          <div class="section-body">
            <h2 class="section-title">Current Employee Details {{$employee->nama}}!</h2>
                <div class="row mt-sm-4">
                  <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">                     
                        <img src="{{asset('foto/' . $employee->foto_profil )}}" class="rounded profile-widget-picture" alt="...">
                        <div class="profile-widget-items">
                          <div class="profile-widget-item">
                            <div class="profile-widget-item-label">ID</div>
                            <div class="profile-widget-item-value">{{$employee->id}}</div>
                          </div>

                          <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Position</div>
                            <div class="profile-widget-item-value">{{$employee->Position->nama}}</div>
                          </div>

                          <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Family Status</div>
                            <div class="profile-widget-item-value">{{$employee->FamilyStatus->nama}}</div>
                          </div>
                        </div>
                      </div>
                      <div class="profile-widget-description">
                        <!-- deskripsi profil -->
                        
                        <div class="profile-widget-name">{{$employee->nama}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{$employee->position->nama}}</div></div>
                            <b>No. KTP  :</b>
                            <br>{{$employee->no_ktp}} <br> <br>
                            <b>NPWP     : </b>
                            <br>{{$employee->npwp}}
                            <br>
                      </div>
                    </div>


                    <h2 class="section-title">Edit Employee Data</h2>
                    <div class="card">
                      <div class="card-body">
                        <form action="/employee/{{$employee->id}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('put')
                          <div class="form-group ">
                            <label for="foto_profil">Change Picture</label><br>
                            <input type="file" name="foto_profil" id="body">
                          </div>
    
                          <div class="form-group">
                            <label>Change Position</label>
                            <select name="position_id" class="form-control">
                              <option disabled selected>Select Position</option>
                                @foreach ($position as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                            </select>
                          </div>
    
                          <div class="form-group">
                            <label>Change Family Status</label>
                            <select name="family_status_id" class="form-control">
                              <option disabled selected>Select Family Status</option>
                                @foreach ($FamilyStatus as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                            </select>
                          </div>

                          <button type="submit" class="btn btn-primary btn-lg mb-1">
                            Update Data
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
            



              <div class="col-12 col-md-12 col-lg-7">
                
                <div class="card">
                    <div class="details m-5" style="display:none">
                        <form action="/eallowance" method="POST">
                            @csrf
                            <input type="hidden" name="employee_id" value="{{$employee->id}}">
                            <div class="form-group">
                                <label>Add Allowance</label>
                                <select name="allowance_id" class="form-control">
                                  <option disabled selected>Select Allowance</option>
                                    @foreach ($allowance as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                                </select>
                              </div>
                              <button type="submit" class="btn btn-primary btn-lg mb-1">
                                Add Allowance
                              </button>
                        </form>
                        
                        <table class="table table-striped">
                          <thead>                                 
                            <tr>
                              <th>Allowance Name</th>
                              <th>Value</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                                @forelse ($has_allowance as $key=>$value)
                                    <tr>
                                        <td>{{$value->allowance->nama}}</td>
                                        <td>Rp. <?= number_format($value->allowance->value)?></td>
                                        <td>
                                          <form action="/eallowance/{{$value->id}}" method="post">
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
                                    </tr>  
                                @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>
                <a id="more" class="btn btn-primary btn-block" onclick="$('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'See Less':'See Allowance');});">Show Allowance</a>
                  
                <div class="card mt-5">
                        <div class="details1 m-5" style="display:none">
                          <form action="/ededuction" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="employee_id" value="{{$employee->id}}">
                                <div class="form-group">
                                <label>Add Deduction</label>
                                <select name="deduction_id" class="form-control">
                                  <option disabled selected>Select Deduction</option>
                                    @foreach ($deduction as $item)
                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                @endforeach
                                </select>
                              </div>
                              <button type="submit" class="btn btn-primary btn-lg mb-1">
                                Add Deduction
                              </button>
                        </form>
                            <table class="table table-striped">
                              <thead>                                 
                                <tr>
                                  <th>Deduction Name</th>
                                  <th>Value</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>                                 
                                <tr>
                                    @forelse ($has_deduction as $key=>$value)
                                        <tr>
                                            <td>{{$value->deduction->nama}}</td>
                                            <td>Rp. <?= number_format($value->deduction->value)?></td>
                                            <td>
                                              <form action="/ededuction/{{$value->id}}" method="post">
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
                                        </tr>  
                                    @endforelse
                              </tbody>
                            </table>
                          </div>
                        </div>
                    <a id="more" class="btn btn-primary btn-block" onclick="$('.details1').slideToggle(function(){$('#more').html($('.details1').is(':visible')?'See Less':'See Deduction');});">Show Deduction</a>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection
