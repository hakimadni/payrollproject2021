@extends('layout.master')
@section('title')
    Show Employee {{$employee->id}}
@endsection
@section('content')

          <a href="/employee" class="btn btn-danger mb-1 pl-4 pr-4">Back</a>  
          <div class="section-body">
            <h2 class="section-title">View Employee {{$employee->nama}}!</h2>
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
                        <div class="profile-widget-item-value">{{$employee->position->nama}}</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Family Status</div>
                        <div class="profile-widget-item-value">{{$employee->FamilyStatus->nama}}</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">{{$employee->nama}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{$employee->position->nama}}</div></div>
                        <b>No. KTP  :</b>
                        <br>{{$employee->no_ktp}} <br> <br>
                        <b>NPWP     : </b>
                        <br>{{$employee->npwp}}
                  </div>
                </div>
              </div>

            

              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                <div class="details m-5" style="display:none">
                        <table class="table table-striped">
                          <thead>                                 
                            <tr>
                              <th>Allowance Name</th>
                              <th>Value</th>
                            </tr>
                          </thead>
                          <tbody>                                 
                            <tr>
                              <td>Create a mobile app</td>
                              <td>
                                Rp. 500.000
                              </td>
                            </tr>
                                @forelse ($has_allowance as $key=>$value)
                                    <tr>
                                        <td>{{$value->allowance->nama}}</td>
                                        <td>Rp. {{$value->value}}</td>
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
                <a id="more" class="btn btn-primary mt-5" onclick="$('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'See Less':'See More');});">See Allowance</a>
                  
                <div class="card mt-5">
                    <div class="details1 m-5" style="display:none">
                            <table class="table table-striped">
                              <thead>                                 
                                <tr>
                                  <th>Deduction Name</th>
                                  <th>Value</th>
                                </tr>
                              </thead>
                              <tbody>                                 
                                <tr>
                                  <td>Create a mobile app</td>
                                  <td>Rp. 500.000</td>
                                  
                                </tr>
                                    @forelse ($has_allowance as $key=>$value)
                                        <tr>
                                            <td>{{$value->allowance->nama}}</td>
                                            <td>Rp. {{$value->value}}</td>
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
                    <a id="more" class="btn btn-primary mt-5" onclick="$('.details1').slideToggle(function(){$('#more').html($('.details1').is(':visible')?'See Less':'See More');});">See Deduction</a>

                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection
