@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
    <h1>Lanchonetes</h1>
        <div class="row">
        @foreach($lanch as $l)
        <div class="media col-md-6">
            <img class="d-flex align-self-start" src="{{asset('img/lanchonete.png')}}"alt="Generic placeholder image">
            <div class="media-body pl-3">
                <div class="nome-restaurante">
                   {{$l->name}}
                </div>
                <div class="stats">
                    <span><i class="fa fa-phone"></i>{{$l->phone}}</span>
                </div>
                <div class="endereco"> {{$l->address}}, {{$l->number}} </div>
            </div>
        </div>
            @endforeach
        </div>
    </div>

@endsection
