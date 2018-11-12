@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
    <h1>Restaurantes</h1>
        @foreach($rest as $r)
        <div class="media col-md-6">
            <img class="d-flex align-self-start" src="https://via.placeholder.com/513x350.png?text=Restaurante+Teste" alt="Generic placeholder image">
            <div class="media-body pl-3">
                <div class="nome-restaurante">
                   {{$r->name}} <small>Tempo de preparao</small>
                </div>
                <div class="stats">
                    <span><i class="fa fa-phone"></i>{{$r->phone}}</span>
                </div>
                <div class="endereco"> {{$r->address}}, {{$r->number}} </div>
            </div>
        </div>
            @endforeach
    </div>

@endsection
