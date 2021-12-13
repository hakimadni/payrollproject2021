@extends('layout.master')
@section('title')
    Taxes
@endsection
@section('content')
    <div class="row">
        @foreach ($employee as $item)
            <div class="col-2 m-5">
                <div class="card" style="width: 18rem;">
                        <img src="{{asset('foto/' . $item->foto_profil )}}" class="foto-profil card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->id}}. {{$item->nama}} </h5>
                      <p class="card-text">
                        @php   
                                            $PKP = 0;
                                            $regsub = 0;
                                            $gross_income = $item->position->value;
                                            $annual_gross_income = $gross_income * 12;
                                            $PTKP = "{$item->FamilyStatus->nama}";
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
                                            if($atax<=0){
                                                $atax=0;
                                            }
    
                                            $mtax = $atax/12;
                                            $npwp = $item->npwp;
                                            if($npwp == "0"){
                                                $ftax = (0.2 * $mtax) + $mtax;
                                                echo "Rp"; echo number_format($ftax);
                                            } else{
                                                echo "Rp"; echo number_format($mtax);
                                            }         
                        @endphp
                      </p>
                      <p><span class="badge badge-dark">{{$item->position->nama}}</span></p>
                      <a href="/taxes/{{$item->id}}" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
            
        @endforeach
    </div>
@endsection