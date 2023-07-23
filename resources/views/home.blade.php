<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics - Homepage</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>
        <div class="container-fluid">
            <div class="row d-flex flex-column">
                <div class="col p-0">
                    <img class="jumbo" src="{{Vite::asset('/resources/images/jumbotron.jpg')}}" alt="jumbotron">
                </div>

                <div class="col bg-color d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex flex-row justify-content-center flex-wrap width mt-5">
                       
                    </div>

                    <div class="button d-flex justify-content-center pb-3 pt-5">
                        <button>LOAD MORE</button>
                    </div>

                    <div class="badge">
                        <span>CURRENT SERIES</span>
                    </div>
                </div>

                <div class="col bg-blue d-flex justify-content-center">
                    <ul class="nav d-flex flex-row p-2">
                        <li class="nav-item d-flex flex-row align-items-center m-4">
                            <img src="">
                            <a class="nav-link text" href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>