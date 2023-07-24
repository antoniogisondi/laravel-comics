@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex flex-column">
            <div class="col p-0">
                <img class="jumbo" src="{{Vite::asset('/resources/images/jumbotron.jpg')}}" alt="jumbotron">
            </div>

            <div class="col bg-color d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex flex-row justify-content-center flex-wrap width mt-5">
                    @foreach($objects as $id => $object)
                        <a href="{{ route('comic', $id) }}">
                            <div class="m-3 kard">
                                <img src="{{ $object['thumb'] }}">
                                <h2 class="d-flex flex-wrap">{{ $object['series'] }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div class="button d-flex justify-content-center pb-3 pt-5">
                    <button>LOAD MORE</button>
                </div>

                <div class="badge">
                    <span>CURRENT SERIES</span>
                </div>
            </div>
        </div>
    </div>
@endsection