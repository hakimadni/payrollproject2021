@extends('layout.master')
@section('title')
    Payroll
@endsection
@section('content')
    <div class="row">
        @foreach ($employee as $item)
            <div class="col-4 mt-5">
                <div class="card" style="width: 18rem;">
                        <img src="{{asset('foto/' . $item->foto_profil )}}" class="foto-profil card-img-top rounded" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->id}} {{$item->nama}} </h5>
                      <p class="card-text"><?= number_format(($item->position->value))?></p>
                      <p><span class="badge badge-dark">{{$item->position->nama}}</span></p>
                      <a href="/taxes/{{$item->id}}" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
            
        @endforeach
    </div>
@endsection