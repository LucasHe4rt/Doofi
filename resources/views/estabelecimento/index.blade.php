@extends('layouts.app')
@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Criado em</th>
                <th>Ações</th>
            </thead>
            <tbody>
            @foreach($estab as $e)
            <tr>
                <th scope="row">{{$e->name}}</th>
                <td>{{$e->type}}</td>
                <td>{{$e->created_at}}</td>
                <td>
                    <a href="">Editar</a>
                    <a href="">Excluir</a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
