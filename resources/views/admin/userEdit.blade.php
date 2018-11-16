@extends('layouts.admin')
@section('content')
    <input value="{{$user->name}}" name="name" type="text">
    <input value="{{$user->email}}" name="email" type="email">
    <input value="{{$user->password}}" name="email" type="password">
    @endsection
