@extends('layouts.app')

@section('content')

<div class="wrapper pizza-index">

    <!-- escape any speical char by using double cr braces -->

    <!-- @for($i=0;$i < 5;$i++) 
            <p>the value for i is {{$i}}</p>
            @endfor -->

    <!-- @for($i=0;$i < count($pizzas);$i++) 
            <p>{{ $pizzas[$i]["type"]}}</p>
            @endfor -->

    <h1>Pizza Orders</h1>
    @foreach($pizzas as $pizza)
    <div class='pizza-item'>
        <img src="/img/pizza.png" alt="pizza icon">
        <h4> <a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
    </div>
    @endforeach

</div>
@endsection