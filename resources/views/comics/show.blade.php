@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex flex-column">
            <div class="col p-0">
                <img class="jumbo" src="{{Vite::asset('/resources/images/jumbotron.jpg')}}" alt="jumbotron">
            </div>

            <div class="col bg-blue p-5">
                <img src="{{ $comic['thumb'] }}">
            </div>

            <div class="col">
                <div class="container-col d-flex flex-column justify-content-center align-items-center py-5">
                    <h2 class="text-uppercase">{{ $comic['title'] }}</h2>
                    <h6>U.S. Price {{ $comic['price'] }}</h6>
                    <p>{{ $comic['description'] }}</p>
                </div>

                <div class="sub-col bg-grey d-flex">
                    <div class="col d-flex justify-content-center">
                        <div class="left-col d-flex flex-column">
                            <h3>Talent</h3>
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
                        </div>    
                    </div>

                    <div class="col d-flex justify-content-center">
                        <div class="right-col">
                            <h3>Specs</h3>
                            <p>{{ $comic['series'] }}</p>
                            <p>{{ $comic['price'] }}</p>
                            <p>{{ $comic['sale_date'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection