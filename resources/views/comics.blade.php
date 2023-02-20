@extends('layouts.app')
@section('page-title','comics')

@section('content')
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
@endsection

