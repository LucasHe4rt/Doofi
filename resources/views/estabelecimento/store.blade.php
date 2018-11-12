@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('estab.create')}}">
        @csrf
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <div>
            <label for="name">Nome</label>
            <input id="name" type="text" name="name">
        </div>
       <div>
           <select name="type">
               <option>Tipo</option>
               <option value="0">Bar</option>
               <option value="1">Lanchonete</option>
               <option value="2">Pizzaria</option>
               <option value="3">Pub</option>
               <option value="4">Restaurante</option>
               <option value="5">Sorveteria</option>
           </select>
       </div>
        <div>
            <label for="address">Endereço</label>
            <input id="address" type="text" name="address">
            <label for="number">Número</label>
            <input id="number" type="tel" name="number">
        </div>
        <div>
            <label for="phone">Telefone</label>
            <input id="phone" type="tel" name="phone" >
        </div>
        <div>
            <label for="description">Descrição</label>
            <textarea id="description" name="description">

            </textarea>
        </div>
        <input type="submit" value="Cadastrar">
    </form>
@endsection
