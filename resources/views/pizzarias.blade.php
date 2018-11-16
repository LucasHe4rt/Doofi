@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
    <h1>Pizzarias</h1>
        @foreach($pizza as $p)
        <div class="media col-md-6">
            <img class="d-flex align-self-start" src="{{asset('img/pizza.png')}}" alt="Generic placeholder image">
            <div class="media-body pl-3">
                <div class="nome-restaurante">
                   {{$p->name}}
                </div>
                <div class="stats">
                    <span><i class="fa fa-phone"></i>{{$p->phone}}</span>
                </div>
                <div class="endereco"> {{$p->address}}, {{$p->number}} </div>
            </div>
        </div>
            @endforeach
    </div>

@endsection
