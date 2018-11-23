@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
    <div class="container emp-profile">
    <form method="post" action="{{route('estab.update',$estab->id)}}">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <div class="form-group">
            <label for="name">Nome</label>
            <input id="name" type="text" name="name" class="form-control" value="{{$estab->name}}">
        </div>
        <div class="form-group">
            <label>Categoria</label>
            <select name="type" class="form-control" required>
                <option value="">Tipo</option>
                <option value="Bar">Bar</option>
                <option value="Lanchonete">Lanchonete</option>
                <option value="Pizzaria">Pizzaria</option>
                <option value="Pub">Pub</option>
                <option value="Restaurante">Restaurante</option>
                <option value="Sorveteria">Sorveteria</option>
            </select>
        </div>
        <div class="form-group">
            <label for="address">Endereço</label>
            <input id="address" type="text" name="address" class="form-control" value="{{$estab->address}}">
            <label for="number">Número</label>
            <input id="number" type="tel" name="number" class="form-control" value="{{$estab->number}}">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input id="phone" type="tel" name="phone" class="form-control" value="{{$estab->phone}}">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea id="description" name="description" class="form-control">{{$estab->description}}</textarea>
        </div>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
    </form>
    </div>
@endsection
