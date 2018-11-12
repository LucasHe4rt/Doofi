@extends('layouts.app')
@section('content')

@foreach($estab as $e)
{{$e->name}}<br>
{{$e->type}}<br>
{{$e->phone}}<br>
{{$e->address}}<br>
@endforeach

@endsection
