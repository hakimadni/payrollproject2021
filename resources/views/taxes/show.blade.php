@extends('layout.master')
@section('title')
    Show Taxes {{$employee->id}}
@endsection
@section('content')

          <a href="/taxes" class="btn btn-danger mb-1 pl-4 pr-4">Back</a>  
          <div class="section-body">
            <h2 class="section-title">View Taxes {{$employee->nama}}!</h2>
            <div class="row">
                        <div class="col-8">
                            <div class="card profile-widget">
                              <div class="profile-widget-header">                     
                                
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
                                  <div class="row">
                                        <div class="col-4">
                                            <img src="{{asset('foto/' . $employee->foto_profil )}}" class="rounded foto-profil img-fluid" alt="...">
                                        </div>
                                      <div class="col-4">
                                            <div class="profile-widget-name">{{$employee->nama}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{$employee->position->nama}}</div>
                                            </div>
                                            @php
                                            $PKP = 0;
                                            $regsub = 0;
                                            $gross_income = $employee->position->value;
                                            $annual_gross_income = $gross_income * 12;
                                            $PTKP = "{$employee->FamilyStatus->nama}";
                                            $positional_fee = 0.05 * $annual_gross_income;
                                            if($positional_fee >= 6000000){
                                                $positional_fee = 6000000;}
    
                                            switch($PTKP){
                                                case 'TK0':
                                                    $regsub = $positional_fee + 54000000;
                                                    $PKP = $annual_gross_income - $regsub;
                                                    break;
                                                case 'TK1':
                                                    $regsub = $positional_fee + 58500000;
                                                    $PKP = $annual_gross_income - $regsub;
                                                    break;
                                                case 'TK2':
                                                    $regsub = $positional_fee + 63000000;
                                                    $PKP = $annual_gross_income - $regsub;
                                                    break;
                                                case 'TK3':
                                                    $regsub = $positional_fee + 67500000;
                                                    $PKP = $annual_gross_income - $regsub;
                                                    break;
                                                case 'K0':
                                                    $regsub = $positional_fee + 58500000;
                                                    $PKP = $annual_gross_income - $regsub;
                                                    break;
                                                case 'K1':
                                                    $regsub = $positional_fee + 63000000;
                                                    $PKP = $annual_gross_income - $regsub;
                                                    break;
                                                case 'K2':
                                                    $regsub = $positional_fee + 67500000;
                                                    $PKP = $annual_gross_income - $regsub;
                                                    break;
                                                case 'K3':
                                                    $regsub = $positional_fee + 72000000;
                                                    $PKP = $annual_gross_income - $regsub;
                                                    break;
                                                default:
                                                    echo "not detected";
                                                    break;
                                            }
    
    
                                            if($PKP <= 60000000){
                                                echo "Tax 5% : ";
                                                $atax = $PKP * 0.05;
                                                }
                                            elseif($PKP<=250000000){
                                                echo "Tax 15% : ";
                                                $atax = 0.05 * 60000000 + ($PKP - 60000000) * 0.15;
                                                }
                                            elseif($PKP<=500000000){
                                                echo "Tax 25% : ";
                                                $atax = 0.05 * 60000000 + (250000000 - 60000000)* 0.15 + ($PKP - 250000000) * 0.25;
                                                }
                                            elseif($PKP<=5000000000){
                                                echo "Tax 30% : ";
                                                $atax = 0.05*60000000+(250000000-600000000)*0.15+(500000000-250000000)*0.25 + ($PKP-500000000) *0.3;
                                                }
                                            else{
                                                echo "Tax 35% : ";
                                                $atax = 0.05*60000000+(250000000-600000000)*0.15+(500000000-250000000)*0.25 + ($PKP-500000000) *0.3 + ($PKP - 5000000000)*0.35;
                                            }
    
                                            $mtax = $atax/12;
                                            $npwp = $employee->npwp;
                                            if($npwp == "0"){
                                                $ftax = (0.2 * $mtax) + $mtax;
                                                echo "Rp"; echo number_format($ftax);
                                            } else{
                                                echo "Rp"; echo number_format($mtax);
                                            }    
    
                                            echo "<p>";
                                            echo "<br>" . $PTKP;
                                            echo "<br> Gross Income             : Rp" . number_format($gross_income);
                                            echo "<br> Annual Gross Income      : Rp" . number_format($annual_gross_income);
                                            echo "<br> Positional Fee           : Rp" . number_format($positional_fee);
                                            echo "<br> Reegulator Substractor   : Rp" . number_format($regsub);
                                            echo "<br> PKP                      : Rp" . number_format($PKP);
                                            echo "<p>";
                                        @endphp
                                        </div>
                                  </div>
                                </div>
                              </div>
                                
            </div>
          </div>
        </section>
      </div>
@endsection
