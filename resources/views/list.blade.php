@extends('layout')

@section('body')
    <div class="cont">
        @foreach ($foods as $key => $food)
            <h2>{{ $key }} </h2>
            @foreach ($food as $i)
                <span>{{ $i->name}}</span><br>
            @endforeach
            <a href="{{route("food.list.category",["category" =>$key])}}">All Product</a>
        @endforeach
    </div>
@endsection
