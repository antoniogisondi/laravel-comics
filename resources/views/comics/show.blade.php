@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex flex-column">
            <div class="col p-0">
                <img class="jumbo" src="{{Vite::asset('/resources/images/jumbotron.jpg')}}" alt="jumbotron">
            </div>

            <div class="col bg-blue p-5 thumb">
                <img src="{{ $comic['thumb'] }}">
            </div>

            <div class="col px-0 pt-5">
                <div class="container-col d-flex flex-column justify-content-center align-items-center py-5">
                    <h2 class="text-uppercase">{{ $comic['title'] }}</h2>
                    <div class="btn-group p-3" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-success">
                            <h6>U.S. Price {{ $comic['price'] }}</h6>
                        </button>
                      
                        <div class="btn-group" role="group">
                          <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Check avaiability
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Buy now</a></li>
                          </ul>
                        </div>
                      </div>
                    
                    <div class="col px-5">
                        <p>{{ $comic['description'] }}</p>
                    </div>
                </div>

                <div class="sub-col bg-grey d-flex justify-content-around pt-3">
                    <div class="d-flex">
                        <div class="left-col d-flex flex-column">
                            <h3>Talent</h3>
                            <hr>
                            <div class="d-flex">
                                <h5>Art by:</h5>
                                <ul class="ms-5">
                                    @foreach($comic['artists'] as $artist)
                                        <li>
                                            {{$artist}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <h5>Written by:</h5>
                                <ul class="ms-4">
                                    @foreach($comic['writers'] as $writer)
                                    <li>
                                        {{$writer}}
                                    </li>
                                    @endforeach 
                                </ul>
                            </div>
                        </div>    
                    </div>

                    <div class="d-flex">
                        <div class="right-col">
                            <h3>Specs</h3>
                            <hr>
                            <div class="d-flex">
                                <h5>Series:</h5>
                                <p class="ms-5">{{ $comic['series'] }}</p>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <h5>U.S. Price:</h5>
                                <p class="ms-4">{{ $comic['price'] }}</p>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <h5>On Sale Date:</h5>
                                <p class="ms-3">{{ date('M-d-Y', strtotime($comic['sale_date'])) }}</p>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col bg-grey d-flex justify-content-center">
                <ul class="nav d-flex flex-row p-2">
                    <li class="nav-item d-flex flex-row align-items-center m-4">
                        <img src="{{Vite::asset('./resources/images/buy-comics-digital-comics.png')}}">
                        <a class="nav-link text" href="#">DIGITAL COMICS</a>
                    </li>

                    <li class="nav-item d-flex flex-row align-items-center m-4">
                        <img src="{{Vite::asset('./resources/images/buy-comics-merchandise.png')}}">
                        <a class="nav-link text" href="#">DC MERCHANDISE</a>
                    </li>

                    <li class="nav-item d-flex flex-row align-items-center m-4">
                        <img src="{{Vite::asset('./resources/images/buy-comics-subscriptions.png')}}">
                        <a class="nav-link text" href="#">SUBSCRIPTION</a>
                    </li>

                    <li class="nav-item d-flex flex-row align-items-center m-4">
                        <img src="{{Vite::asset('./resources/images/buy-comics-shop-locator.png')}}">
                        <a class="nav-link text" href="#">COMIC SHOP LOCATOR</a>
                    </li>

                    <li class="nav-item d-flex flex-row align-items-center m-4">
                        <img src="{{Vite::asset('./resources/images/buy-dc-power-visa.svg')}}">
                        <a class="nav-link text" href="#">DC POWER VISA</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection