@extends('layouts.app')
@section('content')
    {{$user->name}}
    {{$user->email}}
    <a href="{{route('estab.store')}}">Adicionar estabelecimento</a>
    <h1>Estabelecimentos cadastrados</h1>
    @foreach($estab as $e)
    <div>
        {{$e->name}} <a href="{{route('estab.edit',$e->id)}}">Editar</a><a href="{{route('estab.delete',$e->id)}}">Excluir</a>
    </div>
    @endforeach
    @endsection
