<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <div class="jumbo">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">

    </div>
    <div class="bg-grey">
        <div class="container">
            @foreach ($fumetti as $item)
                <div class="card">
                    <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
                    <div class="title-card">
                        {{$item['series']}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('partials.footer')

</body>

</html>