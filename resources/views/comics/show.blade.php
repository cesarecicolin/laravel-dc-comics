@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <h1>{{$comic->title}}</h1>
            <img class="w-25" src="{{$comic->thumb}}" alt="">
            <p>{{$comic->description}}</p>
            
        </div>
    </section>
@endsection