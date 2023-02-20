@extends('layouts.app')

@section('content')
<div class="jumbo">
    <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
</div>
<div class="blue-band">
</div>
<div class="container-single-card">
    <div class="single-card">
        <img src="{{$single['thumb']}}" alt="{{$single['title']}}">
    </div>
    <div class="comic-title">
        <h1>{{$single['title']}}</h1>
    </div>
    <div class="price-section">
        <div>
           U.S.-Price {{$single['price']}}
        </div>
        <div>
            Available
        </div>
    </div>
    <div>
        {{$single['description']}}
    </div>
</div>
@endsection