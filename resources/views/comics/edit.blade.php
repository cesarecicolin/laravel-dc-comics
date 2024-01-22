@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h2>modify: {{ $comic->title }}</h2>

        <div class="row justify-content-center mt-5">
            <div class="col-6">

                @if ($errors->any())
                    <div class="alert alert_danger">
                        @foreach ($errors->all() as $error)
                            <ul>
                                <li>{{$error}}</li>
                            </ul>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">imaggine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">prezzo</label>
                        <input type="text" class="form-control" id="price" name="price"value="{{$comic->price}}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">publicazione</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">tipologia</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">descrizione</label>
                        <textarea type="textarea" class="form-control" id="description" rows='3' name="description"> {{$comic->description}}  </textarea>
                    </div>

                    <button type="submit" class="btn btn-warning">Salva</button>

                </form>
            </div>
        </div>
    </div>
@endsection