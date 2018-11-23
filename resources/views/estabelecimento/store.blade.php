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
            <input id="name" type="text" value="{{old('name')}}" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
            @if ($errors->has('name'))
                <small id="nameHelp" class="invalid-feedback">{{ $errors->first('name') }}</small>
            @endif
        </div>
            <br>
       <div class="form-group">
           <label>Categoria</label>
           <select name="type" class="form-control {{$errors->has('type')}}" required>
               <option value="">Tipo</option>
               <option value="Bar">Bar</option>
               <option value="Lanchonete">Lanchonete</option>
               <option value="Pizzaria">Pizzaria</option>
               <option value="Pub">Pub</option>
               <option value="Restaurante">Restaurante</option>
               <option value="Sorveteria">Sorveteria</option>
           </select>
           @if ($errors->has('type'))
               <small id="typeHelp" class="invalid-feedback">{{ $errors->first('type') }}</small>
           @endif
       </div>
        <div class="form-group">
            <label for="address">Endereço</label>
            <input id="address" type="text" value="{{old('address')}}" name="address" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}">
            @if ($errors->has('address'))
                <small id="addressHelp" class="invalid-feedback">{{ $errors->first('address') }}</small>
            @endif
            <label for="number">Número</label>
            <input id="number" type="tel" name="number" value="{{old('number')}}" class="form-control {{$errors->has('number') ? 'is-invalid' : ''}}">
            @if ($errors->has('number'))
                <small id="numberHelp" class="invalid-feedback">{{ $errors->first('number') }}</small>
            @endif
        </div>
        <div>
            <label for="phone">Telefone</label>
            <input id="phone" type="tel" name="phone" value="{{old('phone')}}" class="form-control {{$errors->has('phone') ? 'is-invalid' : ''}}">
            @if ($errors->has('phone'))
                <small id="phoneHelp" class="invalid-feedback">{{ $errors->first('phone') }}</small>
            @endif
        </div>
        <div>
            <label for="description">Descrição</label>
            <textarea id="description" name="description" class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}">{{old('description')}}</textarea>
            @if ($errors->has('description'))
                <small id="emailHelp" class="invalid-feedback">{{ $errors->first('description') }}</small>
            @endif
        </div>
            <br>
        <input type="submit" value="Cadastrar" class="btn btn-primary">
        </div>
    </form>
    </div>
@endsection
