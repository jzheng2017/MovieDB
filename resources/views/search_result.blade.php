@extends('layout')

@section('content')
    <div class="container">
        <h1>Search result</h1>
        <div class="row">
            @foreach($items as $item)
                <div class="col s12 m12">
                    <h2 class="header">{{$item->Title}}</h2>
                    <div class="card horizontal">
                        <div class="card-image">
                            <img src="{{$item->Poster}}">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <p>Type: {{$item->Type}}<br>
                                    Release Year: {{$item->Year}}
                                </p>
                            </div>
                            <div class="card-action">
                                <a class="blue-text right" href="{{route('item.show', $item->imdbID)}}">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection