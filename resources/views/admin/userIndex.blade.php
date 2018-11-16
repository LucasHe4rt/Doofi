@extends('layouts.admin')
@section('content')
    @foreach($user as $u)
    {{$u->name}}
    {{$u->created_at}}
        <a href="{{route('user.edit',$u->id)}}">Editar</a>
        <a href="{{route('user.delete',$u->id)}}">Excluir</a>
    @endforeach
@endsection
