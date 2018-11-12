@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 20px;">
    <h1>Pizzarias</h1>
        @foreach($pizza as $p)
        <div class="media col-md-6">
            <img class="d-flex align-self-start" src="https://via.placeholder.com/513x350.png?text=Restaurante+Teste" alt="Generic placeholder image">
            <div class="media-body pl-3">
                <div class="nome-restaurante">
                   {{$p->name}} <small>Tempo de preparao</small>
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
