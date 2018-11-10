@extends('layouts.app')
@section('content')
    {{$user->name}}
    {{$user->email}}
    <a href="{{route('estab.store')}}">Adicionar estabelecimento</a>
    @endsection
