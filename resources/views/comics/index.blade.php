@extends('layouts.app')
@section('content')
    <section class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">price</th>
                    <th scope="col">Series</th>
                    <th scope="col">sale date</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('comics.show',['comic' => $comic->id])}}">guarda</a>
                            <a class="btn btn-danger" href="{{route('comics.create')}}">crea</a>
                        </td>
                        
                        
                    </tr>
                @endforeach


            </tbody>
        </table>
    </section>
@endsection
