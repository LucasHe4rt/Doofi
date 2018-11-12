@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
    <h1>Sorveterias</h1>
        @foreach($sorv as $s)
        <div class="media col-md-6">
            <img class="d-flex align-self-start" src="https://via.placeholder.com/513x350.png?text=Restaurante+Teste" alt="Generic placeholder image">
            <div class="media-body pl-3">
                <div class="nome-restaurante">
                   {{$s->name}}
                </div>
                <div class="stats">
                    <span><i class="fa fa-phone"></i>{{$s->phone}}</span>
                </div>
                <div class="endereco"> {{$s->address}}, {{$s->number}} </div>
            </div>
        </div>
            @endforeach
    </div>

@endsection
