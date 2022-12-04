@extends('layout')
@section('body')
    @foreach ($foods as $food)
        <span>{{ $food->name }}</span><br>
    @endforeach
@endsection
