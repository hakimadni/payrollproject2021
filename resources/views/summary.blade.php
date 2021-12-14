@extends('layout.master')

@section('title')
    Meng Summary
@endsection
@section('content')
<div class="row mt-2">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/employee">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
      </a>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Employee</h4>
        </div>
        <div class="card-body">
          <?= count($employee)?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/allowance">
        <div class="card-icon bg-primary">
          <i class="far fa-file"></i>
        </div>
      </a>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Allowance Type</h4>
        </div>
        <div class="card-body">
          <?= count($allowance)?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/deduction">
        <div class="card-icon bg-danger">
          <i class="far fa-file"></i>
        </div>
      </a>
      
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Deduction Type</h4>
        </div>
        <div class="card-body">
          <?= count($deduction)?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/position">
        <div class="card-icon bg-success">
          <i class="fas fa-circle"></i>
        </div>
      </a>
      
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Position</h4>
        </div>
        <div class="card-body">
          <?= count($position)?>
        </div>
      </div>
    </div>
  </div>                  
</div>
<div class="row mt-2">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/employee">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
      </a>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Payroll</h4>
        </div>
        <div class="card-body">
          <?php
            $sum = 0;
            foreach($payroll as $key=>$value)
            {
                                            $PKP = 0;
                                            $nnpwp = 0;
                                            $wnpwp = 0;
                                            $regsub = 0;
                                            $total = 0;
                                            $all = $value->allowance_sum_value;
                                            $ded = $value->deduction_sum_value;
                                            $gross_income = $value->position->value;
                                            $total = $gross_income + $all - $ded;
                                            $annual_gross_income = $gross_income * 12;
                                            $PTKP = "{$value->FamilyStatus->nama}";
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
                                            $npwp = $value->npwp;

                                            if($npwp == "0"){
                                                $ftax = (0.2 * $mtax) + $mtax;
                                                $nnpwp = ($total - $ftax);
                                            } else{
                                                $wnpwp = ($total -  $mtax);
                                            } 

              $sum += $nnpwp + $wnpwp;
            }
            echo "Rp ";
            echo number_format($sum);
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/allowance">
        <div class="card-icon bg-primary">
          <i class="far fa-file"></i>
        </div>
      </a>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Allowance</h4>
        </div>
        <div class="card-body">
          <?php
            $sum = 0;
            foreach($payroll as $key=>$value)
            {
              $sum+= $value->allowance_sum_value;
            }
            echo "Rp ";
            echo number_format($sum);
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/deduction">
        <div class="card-icon bg-danger">
          <i class="far fa-file"></i>
        </div>
      </a>
      
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Deduction</h4>
        </div>
        <div class="card-body">
            <?php
            $sum = 0;
            foreach($payroll as $key=>$value)
            {
              $sum+= $value->deduction_sum_value;
            }
            echo "Rp ";
            echo number_format($sum);
            ?>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/position">
        <div class="card-icon bg-success">
          <i class="fas fa-circle"></i>
        </div>
      </a>
      
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Taxes</h4>
        </div>
        <div class="card-body">
          <?php
            $sum = 0;
            foreach($payroll as $key=>$value)
            {
                                            $PKP = 0;
                                            $regsub = 0;
                                            $gross_income = $value->position->value;
                                            $annual_gross_income = $gross_income * 12;
                                            $PTKP = "{$value->FamilyStatus->nama}";
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
                                            $ftax = 0;
                                            $mtax = $atax/12;
                                            $npwp = $value->npwp;
                                            if($npwp == "0"){
                                                $ftax = (0.2 * $mtax) + $mtax;
                                            } else{
                                                ($mtax);
                                            } 
              $sum += $ftax + $mtax;
            }
            echo "Rp ";
            echo number_format($sum);
            ?>
        </div>
      </div>
    </div>
  </div>                  
</div>

<div class="row mt-2">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/payroll">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
      </a>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Payroll Last Month</h4>
        </div>
        <div class="card-body">
          <?php
            $sum = 0;
            foreach($paylast30 as $key=>$value)
            {
                                            $PKP = 0;
                                            $nnpwp = 0;
                                            $wnpwp = 0;
                                            $regsub = 0;
                                            $total = 0;
                                            $all = $value->allowance_sum_value;
                                            $ded = $value->deduction_sum_value;
                                            $gross_income = $value->position->value;
                                            $total = $gross_income + $all - $ded;
                                            $annual_gross_income = $gross_income * 12;
                                            $PTKP = "{$value->FamilyStatus->nama}";
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
                                            $npwp = $value->npwp;

                                            if($npwp == "0"){
                                                $ftax = (0.2 * $mtax) + $mtax;
                                                $nnpwp = ($total - $ftax);
                                            } else{
                                                $wnpwp = ($total -  $mtax);
                                            } 

              $sum += $nnpwp + $wnpwp;
            }
            echo "Rp ";
            echo number_format($sum);
            ?>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/allowance">
        <div class="card-icon bg-primary">
          <i class="far fa-file"></i>
        </div>
      </a>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Allowance Last Month</h4>
        </div>
        <div class="card-body">
          <?php
            $sum = 0;
            foreach($allowlast30 as $key=>$value)
            {
              $sum += $value->allowance_sum_value;
            }
            echo "Rp ";
            echo number_format($sum);
            ?>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/deduction">
        <div class="card-icon bg-danger">
          <i class="far fa-file"></i>
        </div>
      </a>
      
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Deduction Last Month</h4>
        </div>
        <div class="card-body">
          <?php
          $sum = 0;
          foreach($deductlast30 as $key=>$value)
          {
            $sum += $value->deduction_sum_value;
          }
          echo "Rp ";
          echo number_format($sum);
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <a href="/deduction">
        <div class="card-icon bg-success">
          <i class="fas fa-circle"></i>
        </div>
      </a>
      
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Taxes Last Month</h4>
        </div>
        <div class="card-body">
          <?php
            $sum = 0;
            foreach($paylast30 as $key=>$value)
            {
                                            $PKP = 0;
                                            $regsub = 0;
                                            $gross_income = $value->position->value;
                                            $annual_gross_income = $gross_income * 12;
                                            $PTKP = "{$value->FamilyStatus->nama}";
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
                                            $ftax = 0;
                                            $mtax = $atax/12;
                                            $npwp = $value->npwp;
                                            if($npwp == "0"){
                                                $ftax = (0.2 * $mtax) + $mtax;
                                            } else{
                                                ($mtax);
                                            } 
              $sum += $ftax + $mtax;
            }
            echo "Rp ";
            echo number_format($sum);
            ?>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-12 col-md-12 col-12 col-sm-12">
    <div class="card">
      <div class="card-header">
        <h4>Latest Employee</h4>
      </div>
      <div class="card-body">             
        <ul class="list-unstyled list-unstyled-border">
          @foreach ($last5 as $item)
          <li class="media">
            <img class="mr-3 rounded-circle" style="object-fit: cover" width="50" height="50" src="{{asset('foto/' . $item->foto_profil )}}" alt="avatar">
            <div class="media-body">
              <div class="float-right text-primary">New</div>
              <div class="media-title">{{$item->nama}}</div>
              <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>


@endsection
