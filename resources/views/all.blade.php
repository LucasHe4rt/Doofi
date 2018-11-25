@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <h1>Todos Estabelecimentos</h1>
        <div class="row">
@foreach($estab as $e)
    <div class="media col-md-6">
        <img class="d-flex align-self-start" src="{{asset('img/store.png')}}" alt="Generic placeholder image">
        <div class="media-body pl-3">
            <div class="nome-restaurante">
                {{$e->name}}
            </div>
            <div class="stats">
                <span><i class="fa fa-phone"></i>{{$e->phone}}</span>
                {{$e->type}}
            </div>
            <div class="endereco"> {{$e->address}}, {{$e->number}} </div>
        </div>
    </div>

@endforeach
    </div>
    </div>
@endsection
