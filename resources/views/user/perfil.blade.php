@extends('layouts.app')
@section('content')

    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
    <div class="container emp-profile">
        <div class="row">
            <div class="col-md-8">
                <div class="profile-head">
                    <h5> <b>{{$user->name}} ({{$user->email}})</b> </h5>
                    <h6> <b>Bem-Vindo!</b> </h6>
                    <hr>
                </div>
            </div>
                <div class="col-md-4">
                    <a href="{{route('estab.store')}}"><button class="profile-addestab-btn"> Adicionar estabelecimento</button></a>
                </div>
                @foreach($estab as $e)
                <div class="col-md-12">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$e->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">{{$e->description}}</p>
                            <a href="{{route('estab.edit',$e->id)}}"><button class="btn btn-secondary"> Editar </button></a>
                            <a href="{{route('estab.delete',$e->id)}}"><button class="btn btn-danger">Excluir</button></a>
                        </div>
                    </div>
                </div>



        </div>
    </div>
    @endforeach
    @endsection
