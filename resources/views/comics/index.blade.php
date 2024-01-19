@extends('layouts.app')
@section('content')
    <section class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">thumb</th>
                    <th scope="col">price</th>
                    <th scope="col">Series</th>
                    <th scope="col">sale date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->description}}</td>
                        <td>{{$comic->thumb}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        
                    </tr>
                @endforeach


            </tbody>
        </table>
    </section>
@endsection
