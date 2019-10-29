@extends('layout')


@section('content')

    <div class="container">
        <h1>{{$item->Title}}</h1>
        <div class="row">
            <div class="col s12 m3">
                <img class="responsive-img" src="{{$item->Poster}}">
            </div>

            <div class="col s12 m9">
                <b>Summary</b>
                <p>{{$item->Plot}}</p>
                <div class="divider"></div>
                <a href="{{route('similar.show', $item->Title)}}">Looking for something similar?</a>
            </div>
        </div>
    </div>
@endsection