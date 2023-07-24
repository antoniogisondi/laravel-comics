@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex flex-column">
            <div class="col p-0">
                <img class="jumbo" src="{{Vite::asset('/resources/images/jumbotron.jpg')}}" alt="jumbotron">
            </div>

            <div class="col bg-color text-white d-flex flex-column justify-content-center align-items-center">
                <img src="{{ $comic['thumb'] }}">
                <h1>{{ $comic['title'] }}</h1>
                <h6>U.S. Price {{ $comic['price'] }}</h6>
                <p>{{ $comic['description'] }}</p>
                <p>
                    @foreach($comic['artists'] as $artist)
                    <p>{{$artist}}</p>
                    @endforeach
                </p>
                <p>
                    @foreach($comic['writers'] as $writer)
                    <p>{{$writer}}</p>
                    @endforeach
                </p>
                <p>{{ $comic['series'] }}</p>
                <p>{{ $comic['price'] }}</p>
                <p>{{ $comic['sale_date'] }}</p>
            </div>
        </div>
    </div>
@endsection