@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
    <h1>Bares</h1>
        @foreach($bares as $b)
        <div class="media col-md-6">
            <img class="d-flex align-self-start" src="{{asset('img/bar.png')}}" alt="Generic placeholder image">
            <div class="media-body pl-3">
                <div class="nome-restaurante">
                   {{$b->name}}
                </div>
                <div class="stats">
                    <span><i class="fa fa-phone"></i>{{$b->phone}}</span>
                </div>
                <div class="endereco"> {{$b->address}}, {{$b->number}} </div>
            </div>
        </div>
            @endforeach
    </div>

@endsection
