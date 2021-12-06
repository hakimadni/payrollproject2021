@extends('layout.master')
@section('title')
    Show Payroll {{$payroll->id}}
@endsection
@section('content')

          <a href="/payroll" class="btn btn-danger mb-1 pl-4 pr-4">Back</a>  
          <div class="section-body">
            <h2 class="section-title">View Payroll {{$payroll->nama}}!</h2>
            <div class="row">
                        <div class="col-8">
                            <div class="card profile-widget">
                              <div class="profile-widget-header">                     
                                
                                <div class="profile-widget-items">
                                  <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">ID</div>
                                    <div class="profile-widget-item-value">{{$payroll->id}}</div>
                                  </div>
                                  <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Position</div>
                                    <div class="profile-widget-item-value">{{$payroll->position->nama}}</div>
                                  </div>
                                  <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Family Status</div>
                                    <div class="profile-widget-item-value">{{$payroll->FamilyStatus->nama}}</div>
                                  </div>
                                </div>
                              </div>
                              <div class="profile-widget-description">
                                  <div class="row">
                                        <div class="col-4" style="width: 18rem">
                                            <img src="{{asset('foto/' . $payroll->foto_profil )}}" class="rounded foto-profil card-img-top" alt="...">
                                        </div>
                                      <div class="col-4">
                                            <div class="profile-widget-name">{{$payroll->nama}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{$payroll->position->nama}}</div>
                                            </div>
                                            @php
                                            $PKP = 0;
                                            $regsub = 0;
                                            $allowance = $payroll->allowance_sum_value;
                                            $deduction = $payroll->deduction_sum_value;
                                            $gross_income = $payroll->position->value;
                                            $gross = $gross_income + $allowance - $deduction;
                                            $annual_gross_income = $gross_income * 12;
                                            $PTKP = "{$payroll->FamilyStatus->nama}";
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
                                                $atax = $PKP * 0.05;
                                                }
                                            elseif($PKP<=250000000){
                                                $atax = 0.05 * 60000000 + ($PKP - 60000000) * 0.15;
                                                }
                                            elseif($PKP<=500000000){
                                                $atax = 0.05 * 60000000 + (250000000 - 60000000)* 0.15 + ($PKP - 250000000) * 0.25;
                                                }
                                            elseif($PKP<=5000000000){
                                                $atax = 0.05*60000000+(250000000-600000000)*0.15+(500000000-250000000)*0.25 + ($PKP-500000000) *0.3;
                                                }
                                            else{
                                                $atax = 0.05*60000000+(250000000-600000000)*0.15+(500000000-250000000)*0.25 + ($PKP-500000000) *0.3 + ($PKP - 5000000000)*0.35;
                                            }
    
                                            $mtax = $atax/12;
                                            $npwp = $payroll->npwp;
                                            if($npwp == "0"){
                                                $ftax = (0.2 * $mtax) + $mtax;
                                                echo "Net Payroll <br> Rp "; echo number_format($gross - $ftax);
                                            } else{
                                                echo "Net Payroll <br> Rp "; echo number_format($gross -  $mtax);
                                            } 
    
                                            echo "<p>";
                                            echo "<br>" . $PTKP;
                                            echo "<br> Base Salary      : Rp" . number_format(8000000);
                                            echo "<br> Salary Position  : Rp" . number_format(($payroll->position->value)-8000000);
                                            echo "<br> Total Allowance  : Rp" . number_format($allowance);
                                            echo "<br> Total Deduction  : Rp" . number_format($deduction);
                                            echo "<br> Gross Payroll    : Rp" . number_format($gross);
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
