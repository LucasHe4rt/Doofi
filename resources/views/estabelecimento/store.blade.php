@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
    <div class="container emp-profile">
    <form method="post" action="{{route('estab.create')}}">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <div class="form-group">
        <div>
            <label for="name">Nome</label>
            <input id="name" type="text" name="name" class="form-control">
        </div>
            <br>
       <div class="form-group">
           <label>Categoria</label>
           <select name="type" class="form-control">
               <option>Tipo</option>
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
            <input id="address" type="text" name="address" class="form-control">
            <label for="number">Número</label>
            <input id="number" type="tel" name="number" class="form-control">
        </div>
        <div>
            <label for="phone">Telefone</label>
            <input id="phone" type="tel" name="phone" class="form-control">
        </div>
        <div>
            <label for="description">Descrição</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
            <br>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div>
    </form>
    </div>
@endsection
